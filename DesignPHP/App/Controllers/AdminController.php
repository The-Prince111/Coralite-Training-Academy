<?php

class AdminController extends Controller
{
    
    public function admin()
    {
        $this->view->message = 'My Admin Land Page Controller';
        $this->view->render('App/Views/Admin/AdminMenu.php');
    }
    
}


?>