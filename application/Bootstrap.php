<?php
    class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{
        protected function _initAutoload(){
          $autoloader = new Zend_Application_Module_Autoloader(
                               array('namespace'=>'','basePath' => dirname(__FILE__))
                            );

            return $autoloader;
        }
        
       
        protected function _initConnection(){
            $config = new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini');
            $params = $config->db->jwl->toArray();
            $dbAdapter = Zend_Db::factory($config->db->adapter,$params['server1']);
            Zend_Db_Table::setDefaultAdapter($dbAdapter);
            Zend_Registry::set('db_Adapter',$dbAdapter);
        }
        
       
      
    
    }


?>


