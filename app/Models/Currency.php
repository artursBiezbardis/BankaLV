<?php declare(strict_types=1);

namespace App\Models;

class Currency
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price)

    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}