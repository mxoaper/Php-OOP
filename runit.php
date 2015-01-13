<?php 
class Vegetable {

    public $edible;
    public $color;

   function Vegetable($edible, $color="green") 
   {
       $this->edible = $edible;
       $this->color = $color;
   }

   function is_edible() 
   {
       return $this->edible;
   }

   function what_color() 
   {
       return $this->color;
   }
   
} 
 echo new Vegetable("Yes", "Red");