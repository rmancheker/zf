<?php 
    
    final class main{
        
        private $p = "private data";
        
        final function A(){
            echo "final function A called";
        }
        
        function test(){
            echo $this->p;
            echo "test called...";
        }
        
    }

/*
    class subclass extends main{
        function A(){
            echo "function A called from subclass";
        }
        
    }
*/

$obj = new main();
$obj->A();
$obj->test();


$obj1 = new main();
$obj1->A();
$obj1->test();

//Fatal error: Class subclass may not inherit from final class (main) 
//Fatal error: Cannot override final method main::A()

//Final keyword prevents child classes from overriding a method by prefixing the defination with final.
//If the class it self is final then it cannot be extended.
    
?>

<html>
    <body>
        <p>
        When to declare a class as final ?<br/>
You should declare a class as final when you think that you implementation of that class should not change in the derived class. You should do this mainly for Utility classes where you don't want the behavior/implementation of your class to change.</p>
<p>
When to declare a method as final ?<br/>
You should declare a class method as final when you think that the method you develop contains necessary functionality to support your application and any modification or change to the functionality can cause unexpected errors/bugs.</p>
    </body>
</html>