<?php 
class Category {
      public $animal;
      public $età;
      public $weight;

      function __construct($_animal,$_weight="")
      {
        $this->animal=$_animal;
        $this->weight=$_weight;
      }

}