<?php
namespace vehicles;
class vehicle
{
    public $color;
    public $no_of_tyres;
    public $no_of_doors;
    private $price = 20000;

    public function setPrice($new_price)
    {
        $this->price = $new_price;
    }
    public function getPrice(){
        return $this->price;
    }
}

class tuktuk extends vehicle
{
    public $no_plate;

    public function setNoPlate($no_plate)
    {
        $this->no_plate = $no_plate;
    }

    public function displayNoPlate()
    {
        echo "$this->no_plate";
    }
}

$tuktuk1 = new tuktuk();
$tuktuk1->setPrice(150345);
$tuktuk1->color = "Blue";
$tuktuk1->setNoPlate("kcr 234k");
$tuktuk1->no_of_tyres = 3;
$tuktuk1->displayNoPlate();

