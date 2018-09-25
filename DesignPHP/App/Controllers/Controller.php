<?php

require_once 'App/Models/Render.php';

class Controller
{
    public function __construct() 
    {
        $this->view = new View();
        
    }
    public function error()
    {
    }

}

?>
