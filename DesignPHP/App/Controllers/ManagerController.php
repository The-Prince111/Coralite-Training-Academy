<?php

class ManagerController extends Controller
{
    public function manager()
    {
        $this->view->message = 'My Manager Land Page Controller';
        $this->view->render('App/Views/Manager/ManagerMenu.php');
    }
}

?>