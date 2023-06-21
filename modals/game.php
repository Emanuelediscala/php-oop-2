<?php 

class game extends products {

    public $categories;
    public $imageURL;

    function __construct($name, $price, $description,$categories,$imageURL)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->categories = $categories;
        $this->imageURL = $imageURL;
    }
}
?>