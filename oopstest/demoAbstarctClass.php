<?php
    

phpinfo();

exit;

    abstract class Human{
        
        abstract public function talk();
        abstract public function eat();
        abstract public function walk();
        
        public function calcMath($a,$b){
             echo $a*$b;
        }
    
    }

    class man extends Human{
        
        
        public function talk(){
            echo "Keep talking";
        }
        
         public function eat(){
            echo "Keep eating";
        }
        
         public function walk(){
            echo "Keep walking";
        }
    }


//$obj = new Character(); //Fatal error: Cannot instantiate abstract class

$user = new man();
$user->talk();
$user->calcMath(5,3);








































?>