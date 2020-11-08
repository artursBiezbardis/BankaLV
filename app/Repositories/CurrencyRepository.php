<?php declare(strict_types=1);

namespace App\Repositories;


class CurrencyRepository
{

    private string $name;
    private float $price;

    public function __construct(string $name=null, float $price=null)
    {
        if($name!==null&&$price!==null){

            $this->name = $name;
            $this->price = $price;
        }

    }
    function showCurrencies(){


    }

    function addCurrencies()
    {

        query()
            ->insert('currencies')
            ->values([
                'name' => ':name',
                'price' => ':price'
            ])
            ->setParameters([

                'name' => $this->name,
                'price' => $this->price
            ])
            ->execute();


    }

    function deleteAllTableContent(): void
    {
        query()->delete('currencies')->execute();
    }
}