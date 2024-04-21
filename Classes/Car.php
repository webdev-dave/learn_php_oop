<?php

class Car
{
    //Properties
    private $brand;
    private $color;


    //Constructor
    public function __construct(string $brand, string $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    //Getter and setter methods
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand(string $brand)
    {
        return $this->brand = $brand;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor(string $color)
    {
        $allowedColors = [
            "red",
            "blue",
            "green",
            "yellow"
        ];
        if (in_array($color, $allowedColors)) {
            return $this->color = $color;
        }

    }


    //Method 
    public function getCarInfo()
    {
        return "Brand: " . $this->brand . " Color: " . $this->color;
    }
}


