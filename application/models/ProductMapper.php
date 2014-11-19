<?php 

class Application_Model_ProductMapper{
    protected $_dbTable;
    
    public function setDbTable($dbTable) {
			if (is_string($dbTable)) {
				$dbTable = new $dbTable;
			}
			if (!$dbTable instanceof Zend_Db_Table_Abstract) {
				throw new Exception("Invalid table data getway provideed");
			}
			$this->_dbTable = $dbTable;
			return $this;
		}
    
        public function getDbTable() {
			if (null === $this->_dbTable) {
				$this->setDbTable('Application_Model_DbTable_Product');
			}
			return $this->_dbTable;
		}
    
    
    public function save(Application_Model_Product $model){
        $return = 0;
        $data = array(
            'ID'=>$model->getId(),
            'name'=>$model->getName(),
            'description'=>$model->getDescription(),
            'productNo'=>$model->getProductNo(),
            'quantity'=>$model->getQuantity(),
            'sellingprice'=>$model->getSellingprice(),
            'costprice'=>$model->getCostprice(),   
        );

        if(null===($id=$model->getId())){
            unset($data['ID']);
            $return = $this->getDbTable()->insert($data);
        }else{
            $return = $this->getDbTable()->update($data, array('ID=?'=>$id));
        }

        return $return;
    }
    
    public function toArray($model){
         $data = array(
            'ID'=>$model->getId(),
            'name'=>$model->getName(),
            'description'=>$model->getDescription(),
            'productNo'=>$model->getProductNo(),
            'quantity'=>$model->getQuantity(),
            'sellingprice'=>$model->getSellingprice(),
            'costprice'=>$model->getCostprice()  
        );
             
             return $data;
    }
    
    public function fetchAll(){
        return $this->getDbTable()->fetchAll($this->getDbTable()->fetchAllData());
    }
    
    
    
    

}

?>