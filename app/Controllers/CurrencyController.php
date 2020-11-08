<?php

namespace App\Controllers;

use App\Services\DeleteAllRowsService;
use App\Services\AddCurrenciesService;
use App\Services\ShowCurrenciesService;

class CurrencyController
{
    public function emptyTable(): void
    {
        (new DeleteAllRowsService())->execute();
    }

    public function addCurrencies($currenciesCollection)
    {
        (new AddCurrenciesService())->execute($currenciesCollection);
    }

    public function showCurrencies()
    {
        return (new ShowCurrenciesService())->execute();
    }
}