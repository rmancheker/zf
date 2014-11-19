<?php

class BooksController extends Zend_Controller_Action
{

   
    public function init()
    {
      $response = $this->getResponse();
     $response->insert('navigation', $this->view->render('navigation.phtml'));
    }

    public function indexAction()
    {    
       $response = $this->getResponse();
       $response->insert('mainfooter', $this->view->render('footer.phtml'));  
    }
    
    public function listAction(){
        $booksTBL = new Application_Model_DbTable_Books();
        $this->view->books = $booksTBL->fetchAll();
    }
    
     public function addAction()
    {    
       //echo "add Action";
         // $response = $this->getResponse();
       //$response->insert('mainfooter', $this->view->render('footer.phtml'));  
    }
   
    
    
}
