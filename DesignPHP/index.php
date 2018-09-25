<?php

  require_once('/Config/Conn.php');
  
  if (isset($_GET['controller']) && isset($_GET['action'])) 
    {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
     } 
     else 
     {
    $controller = 'Index';   //default controller
    $action     = 'index';	//default action
    }

require_once('Config/Routes.php');
?>