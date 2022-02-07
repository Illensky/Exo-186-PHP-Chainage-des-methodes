<?php

class VODService
{
    private string $name;
    private float $price;

    public function __construct($name, $price)
    {
        $this->price = $price;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return VODService
     */
    public function setName(string $name): VODService
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return VODService
     */
    public function setPrice(float $price): VODService
    {
        $this->price = $price;
        return $this;
    }
}