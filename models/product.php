<?php 
require_once __DIR__ . "/category.php";
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/toys.php";
require_once __DIR__ . "/../data/db.php";
 class AnimalProduct{
    
        public $name;
        public $brand;
        private $price;
        public $Category;
        public $discount;
        public $img;

        function __construct($_name,$_brand,$_price,Category $_category,$_img)
        {
        
            $this->name=$_name;
            $this->brand= $_brand;
            $this->price=$_price;
            $this->Category=$_category;
            $this->img=$_img;
        }
        
               
            
       
    
   
        public function setPrice($_price)
        {
            if($_price > 0){
                $this->price=$_price;
            }else{
                throw new Exception("il prezzo deve essere maggiore di zero");
            }
        }
        public function getPrice()
        {
            return $this->price;
        }
 }

?>



 