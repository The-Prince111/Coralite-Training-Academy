<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MenuController extends Controller
{
    public function menu($uRole)
    {
        
    if($uRole == 'Admin')
    {
        require_once 'App/Views/Admin/AdminMenu.php';
    }
    else
        if($uRole == 'Client')
        {
            require_once 'App/Views/Client/ClientMenu.php';
        }
        else
            if($uRole == 'Manager')
            {
                require_once 'App/Views/Manager/ManagerMenu.php';
            }
            else
            {
                require_once 'Public/Home.php';
            }
    }
}

?>
