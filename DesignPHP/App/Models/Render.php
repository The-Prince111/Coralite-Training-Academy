<?php

class View
{
    public function __construct() 
    {
        //require_once 'Application/Views/Public/Home.php';
    }
   
    public function  render($viewScript)
    {
        
        if($viewScript == 'Home')
        {
            require_once 'Public/Home.php';
        }
        else if($viewScript == 'Contact')
        {
             require_once 'Public/Contact.php';
        }
        else if($viewScript == 'About')
        {
             require_once 'Public/About.php';
        }
        else if ($viewScript == 'Login')
        {
            require_once 'Public/Login.php';
        }
    }
}


