<?php 
require_once __DIR__ . "/category.php";
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/toys.php";
 class AnimalProduct{
        public $name;
        public $brand;
        public $price;
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
   

 }

?>

<?php $product=new AnimalProduct("ganmmy","canin",10.90,new Category("cane","1kg"),"");

 