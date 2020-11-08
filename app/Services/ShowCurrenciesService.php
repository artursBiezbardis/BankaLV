<?php declare(strict_types=1);
namespace App\Services;

use App\Repositories\CurrencyRepository;
class ShowCurrenciesService
{
    public function execute()
    {
        return (new CurrencyRepository())->showCurrencies();
    }
}