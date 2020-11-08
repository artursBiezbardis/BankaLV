<?php
namespace App\Controllers;

use App\Services\DeleteAllRowsService;
class CurrencyController
{
    public function emptyTable():void
    {
        (new DeleteAllRowsService())->execute();
    }

}