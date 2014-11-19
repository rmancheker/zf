<?php

class IndexController extends Zend_Controller_Action
{

   
    public function init()
    {
       $response = $this->getResponse();
       $response->insert('navigation', $this->view->render('navigation.phtml'));
    }

    public function indexAction()
    {    
       $response = $this->getResponse();
       $response->insert('sidebar', $this->view->render('sidebar.phtml'));
       $response->insert('mainfooter', $this->view->render('footer.phtml'));
       //echo "indexAction!!!!";  
    }
    
    
    public function addAction(){
        if($this->getRequest()->isPost()){
            $formdata = $this->getRequest()->getPost();
            
            $model = new Application_Model_Product($formdata);
            $objMapper = new Application_Model_ProductMapper($model);
            $pro_id = $objMapper->save($model);
            if(is_numeric($pro_id)){
                $err = "record saved";
            }
        }
        $this->view;
    }
    
    
    
}
