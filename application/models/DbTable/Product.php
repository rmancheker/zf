<?php 

class Application_Model_DbTable_Product extends Zend_Db_Table_Abstract{
    protected $_name = 'product';
    
    public function fetchAllData(){
       
    $select = $this->select()->from($this->_name, array('*'));
    return $select;

    }

}

?>