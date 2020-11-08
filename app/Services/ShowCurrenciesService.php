<?php


namespace App\Services;


use App\Repositories\CurrencyRepository;

class ShowCurrenciesService
{
    public function execute()
    {
        return (new CurrencyRepository())->showCurrencies();
    }
}