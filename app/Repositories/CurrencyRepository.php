<?php declare(strict_types=1);

namespace App\Repositories;

use App\Models\Currency;

class CurrencyRepository
{
    private string $name;
    private string $price;

    public function __construct(string $name = null, string $price = null)
    {
        if ($name !== null && $price !== null) {
            $this->name = $name;
            $this->price = $price;
        }
    }

    function showCurrencies()
    {
        return query()
            ->select('*')
            ->from('currencies')
            ->execute()
            ->fetchAllAssociative();
    }

    function addCurrencies()
    {

        query()
            ->insert('currencies')
            ->values([
                'name' => ':name',
                'price' => ':price'])
            ->setParameters([
                'name' => $this->name,
                'price' => $this->price])
            ->execute();

    }

    function deleteAllTableContent(): void
    {
        query()->delete('currencies')->execute();
    }
}