<?php

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;
use App\Controllers\CurrencyController;

require_once 'vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


function database(): Connection
{
    $connectionParams = [
        'dbname' => $_ENV['DB_DATABASE'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
        'host' => $_ENV['DB_HOST'],
        'driver' => 'pdo_mysql',
    ];

    $connection = DriverManager::getConnection($connectionParams);
    $connection->connect();

    return $connection;
}

function query(): QueryBuilder
{
    return database()->createQueryBuilder();
}

require_once 'app/currencyImport.php';
$showCurrencies = (new CurrencyController())->showCurrencies();

require_once 'app/Views/index.view.php';
/*ini_set('xdebug.var_display_max_depth', '10' );
$xml=file_get_contents('https://www.bank.lv/vk/ecb.xml');
$service = new Service();
$service->elementMap=[
    'Currency'=>'Sabre\Xml\Deserializer\keyValue'
];
$currencyArray=$service->parse($xml);

/*function adCurrencies(array $currencyArray)
{
    foreach ($currencyArray[1]['value'] as $item) {

        query()
            ->insert('currencies')
            ->values([
                'name' => ':name',
                'price' => ':price'
            ])
            ->setParameters([

                'name' => $item['value'][0]['value'],
                'price' => $item['value'][1]['value']
            ])
            ->execute();

    }
}*/

/*function deleteAllTableContent()
{
    query()->delete('currencies')->execute();
}*/
/*(new CurrencyController())->emptyTable();
$currenciesCollection=[];
foreach ($currencyArray[1]['value'] as $key=>$item)
{
    $currenciesCollection[$key]=
        [
        'name' => $item['value'][0]['value'],
        'price' => $item['value'][1]['value']
    ];\App\Controllers\CurrencyController
}
var_dump($currenciesCollection);*/
/*deleteAllTableContent();*//*adCurrencies($result)*/;