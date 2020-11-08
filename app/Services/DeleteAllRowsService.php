<?php declare(strict_types=1);

namespace App\Services;

use App\Repositories\CurrencyRepository;

class DeleteAllRowsService
{

    public function execute()
    {
        (new CurrencyRepository())->deleteAllTableContent();
    }


}