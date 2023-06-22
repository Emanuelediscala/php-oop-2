<?php 
require_once __DIR__ ."/../traits/Weightable.php";
class products
{
    use Weithable;
    public $name;
    public $price = 0;
    public $description;

    public $color;
    public function __construct($name,$price,$description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
    public function setprice($value) {
        if ($value>=0) {
            $this->price = $value;
        }
    }
    public function getPrice() {
        if(is_null($this->price) || is_nan($this->price)) {
            throw new Exception("valore non numerico");
        }
        if ($this->price<0) {
            throw new RangeException("prezzo negativo");
            } else if($this->price == 0) {
                throw new RangeException(""); 
            }
            return $this->price . " €";
        }
       
    }

?>