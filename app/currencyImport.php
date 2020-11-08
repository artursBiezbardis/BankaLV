<?php declare(strict_types=1);

use Sabre\Xml\Service;
use App\Controllers\CurrencyController;

$xml = file_get_contents('https://www.bank.lv/vk/ecb.xml');
$service = new Service();
$service->elementMap =
    [
        'Currency' => 'Sabre\Xml\Deserializer\keyValue'
    ];
$currencyArray = $service->parse($xml);


(new CurrencyController())->emptyTable();
$currenciesCollection = [];
foreach ($currencyArray[1]['value'] as $key => $item) {
    $currenciesCollection[$key] =
        [
            'name' => $item['value'][0]['value'],
            'price' => $item['value'][1]['value']
        ];
}
(new CurrencyController())->addCurrencies($currenciesCollection);
