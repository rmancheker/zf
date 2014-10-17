<?php
   //echo "Test code";
   // echo "Apache Version: Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7";
    
 const TYPES = "Constant Value!!!";

class A{
   
    
    function addNum($val,$val2){
       return $val+$val2;
    }
    
    
}
    

class B extends A{
    const TYPE = "New....";
   
    /*
    function addNum($val,$val2,$val3){
        $v = $val+$val2+$val3;
       return $v;
    } 
    */
    
    
    
    public function showConstant() {
        
       
		echo "Echo from showConstant() : " . self::TYPE;
	}
    
}

$obj = new B();

 echo $obj->showConstant();

//echo $obj::TYPES;


?>