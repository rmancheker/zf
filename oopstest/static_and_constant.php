<?php

const br = "<br/>------------<br/>";
    
class MyCircle{
    static $PI = 3.14;
    const PI = 3.14;
    
    
    static function computeArea($r){
      echo "cccccc";
       // return self::PI*$r*$r;
    }
    
    function B(){
        echo "BBBBBB";
    }
    
}
$b = new MyCircle();
$b->B();
$b->computeArea(30);//does not call
echo br;
echo MyCircle::$PI;
echo br;
echo MyCircle::PI;
echo br;
echo MyCircle::computeArea(10);



/* static keyword is used to declare field and methods that can be accessed without having to create instance of the class.

Static members belong to the class, you dont have to create an instance of the class to access the static members.

track the number of visitors in the site.


*/

?>