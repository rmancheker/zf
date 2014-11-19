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
        
        
        function _initViewHelpers(){
            $this->bootstrap('layout');
            $layout = $this->getResource('layout');
            $view = $layout->getView();
            
            $view->doctype('HTML4_STRICT');
            
            $view->headMeta()
                ->appendHttpEquiv('Content-Type', 'text/html; charset=UTF-8')
                ->appendHttpEquiv('Content-Language', 'en-US')
                ->appendName('keywords', 'framework, PHP, stampingground.in');
            
           
            $view->headTitle()->setSeparator(' - ');
            $view->headTitle('::Zend Framework Project::');
            $view->headLink()->appendStylesheet('/style.css');
        
        
        }
        
        
        
        
    }


?>


