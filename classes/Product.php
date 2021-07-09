<?php 

class Product {
    public $code;
    public $description;
    public $date;
    protected $price;
    function __construct($code ,$description="",$date, $price) {
        $this->code = $code;
        $this->description= $description;
        $this->date = $date;
        $this->price = $price;   
    }
    
}

; ?>
