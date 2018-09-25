<?php

require_once '/App/Controllers/Controller.php';
require_once 'App/Models/User.php';

class LoginController Extends Controller
{
   
    
    public  function login()
    {
        $username = filter_input(INPUT_GET, "username")? filter_input(INPUT_GET, "username"):'';
        $password = filter_input(INPUT_GET, "password")? filter_input(INPUT_GET, "password"):'';
        
        $user = User::getUser($username,$password);
        
        if (!$user)
        {
            echo 'please provide the correct user details';
            include 'Public/Login.php';
        }
        else
        {
            echo 'Logged in';
            $user = User::find($username,$password);
            
            require_once 'view/adminPages.php';

        }
    }
    
}

?>