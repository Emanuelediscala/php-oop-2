<?php 
require_once __DIR__ ."/../traits/Weightable.php";
class products
{
    use Weithable;
    public $name;
    public $price = 0;
    public $description;

    public $color;
    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
}
?>