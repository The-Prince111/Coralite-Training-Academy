<?php

class ClientController extends Controller
{
    public function client()
    {
        $this->view->message = 'My Cleint Land Page Controller';
        $this->view->render('App/Views/Admin/ClientMenu.php');
    }
}

?>