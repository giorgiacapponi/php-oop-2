<?php
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/category.php";

class Food extends AnimalProduct{
    public $type;
    public $expire_date=2024;

    function __construct($_name,$_brand,$_price,Category $_category, $_type,$_img)
    {
        $this->type= $_type;
        parent:: __construct($_name,$_brand,$_price,$_category,$_img);
    }

    public function showInfo(){
        return "data di scandenza:{$this->expire_date}";
    }
    
}

