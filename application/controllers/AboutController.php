<?php

class AboutController extends Zend_Controller_Action
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
    
    
    
}
