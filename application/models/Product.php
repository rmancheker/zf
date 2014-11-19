<?php 

 class Application_Model_Product{
     protected $_Id;
     protected $_name;
     protected $_description;
     protected $_productNo;
     protected $_quantity;
     protected $_sellingprice;
     protected $_costprice;
     
     public function __construct(array $options=null){
        if(is_array($options)){
            $this->setOptions($options);
        }
     }
     
     public function setOptions(array $options){
        $methods = get_class_methods($this);
        foreach($options as $key => $value){
            $method = 'set'.ucfirst($key);
            if(is_array($methods)){
                $this->$method($value);
            }
        } 
         return $this;
     }
     
     public function setId($data){
        $this->_Id = $data;
         return $this;
     }
     
     public function getId(){
        return $this->_Id;
     }
     
     public function setName($data){
         
        $this->_name = $data;
         return $this;
     }
     
     public function getName(){
        return $this->_name;
     }
     
     public function setDescription($data){
        $this->_description = $data;
         return $this;
     }
     
     public function getDescription(){
        return $this->_description;
     }
     
    public function setProductNo($data){
        $this->_productNo = $data;
         return $this;
     }
     
     public function getProductNo(){
        return $this->_productNo;
     }
     
       public function setQuantity($data){
        $this->_quantity = $data;
         return $this;
     }
     
     public function getQuantity(){
        return $this->_quantity;
     }
     
       public function setSellingprice($data){
        $this->_sellingprice = $data;
         return $this;
     }
     
     public function getSellingprice(){
        return $this->_sellingprice;
     }
     
       public function setCostprice($data){
        $this->_costprice = $data;
         return $this;
     }
     
     public function getCostprice(){
        return $this->_costprice;
     }

 }//end of class
?>