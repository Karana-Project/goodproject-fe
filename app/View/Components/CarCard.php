<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CarCard extends Component
{
    public $image, $name, $description, $price;
    public $brand, $year, $km, $transmission, $seats;

    public function __construct($image, $name, $description, $price, $brand = null, $year = null, $km = null, $transmission = null, $seats = null)
    {
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->brand = $brand;
        $this->year = $year;
        $this->km = $km;
        $this->transmission = $transmission;
        $this->seats = $seats;
    }

    public function render()
    {
        return view('components.car-card');
    }
}
