<?php 
class products
{
    public $name;
    public $price = 0;
    public $description;

    public $color;
    public function __construct($name, $price, $description, $color)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
}
?>