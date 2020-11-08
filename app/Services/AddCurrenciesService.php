<?php declare(strict_types=1);

namespace App\Services;

use App\Repositories\CurrencyRepository;
class AddCurrenciesService
{
    public function execute(array $allCurrencies)
    {
        foreach ($allCurrencies as $item) {
            (new CurrencyRepository($item['name'], $item['price']))->addCurrencies();
        }
    }
}