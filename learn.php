<?php
    echo "learning Zend framework";
	
	echo "folder structure:

		1) There are 3 folder is the root directory
			- application
			- library
			- public
            
        2) Inside public folder there are 2 files:
			- .htaccess
			- index.php
			
		2) Inside application folder there are 4 folder and 1 Bootstrap.php file:
			- models
			- views
			- controllers
			- configs
			- Bootstrap.php
			
		3) Inside configs folder there is application.ini file
		
		4) Inside controllers folder there are 2 php files (by default)
			- IndexController.php
			- ErrorController.php
			
		5) Inside views folder there are 2 folder:
			- helpers
			- scripts
			
		6) Inside scripts there 2 folder:
			- error
			- index
			
		7) Inside error folder there is error.phtml file
		
		8) Inside index folder there is index.phtml file
		
		9) helper folder is empty
		
		
	

quickstart
|-- application
|   |-- Bootstrap.php
|   |-- configs
|   |   `-- application.ini
|   |-- controllers
|   |   |-- ErrorController.php
|   |   `-- IndexController.php
|   |-- models
|   `-- views
|       |-- helpers
|       `-- scripts
|           |-- error
|           |   `-- error.phtml
|           `-- index
|               `-- index.phtml
|-- library
|-- public
|   |-- .htaccess
|   `-- index.php

	
	
Function Overloading - If you write same method name with different signitures for the method its called as function overloading.

Access Specifiers
------------------

http://www.youtube.com/watch?v=jPHLgk4A5r0

Access specifiers - Access specifiers are used to specify the scope of the members of the class and the class it self.
                    
                    Access specifiers are : Public
                                            Private
                                            Protected
                                            
                    Private access specifier can be given to any member of the class. Eg: Variable, Methods or constructor.
                    Members will be accessed init the class only, not outside of it.
                    
                    Protected access specifier  - Any protecdted member can be accesed with in the same class, within the child class (sub class).
                    
                    Public modifier can be accessed from any where.
                    

Package is set of related class files.

Eg:
-------------------------
Package P1 - 

public class A{
    int i;
    private ch;
    public f;
    protected d;
    
    function test(){
    // all the members can be acces within a class.
    i,ch,f,d
    }
}

Package P1 - 

class B extends A{
    i,d,f
}

Package P1 - 

// Non derived class from A

class c{
    obj.d // you need instance of class A to access protected member of A in same package.
    obj.i
    f
}

--------------------------------

Package P2

class D extends  A{
    d,f
}

class E{
    obj.f
}
--------------------End of Access specifiers-------------------------------


Access Modifiers
-----------------

    Classes - Public, Abstract, Final




    
    
    
    
    
    
    
    
    
    
    
    
    
    
	
	";

?>