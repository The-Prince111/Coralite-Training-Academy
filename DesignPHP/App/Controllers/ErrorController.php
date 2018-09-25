<?php

class ErrorController extends Controller
{
     public function error()
    {
        $this->view->message = 'My Error Page Controller';
        $this->view->render('App/Views/Public/Error.php');
    }
}

?>