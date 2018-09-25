<?php

require_once 'App/Controllers/Controller.php';
require_once 'App/Models/Render.php';

class IndexController extends Controller
{
    public function __construct() 
      {
        
      }

     public function index()
    {
        require_once 'Public/Home.php';
    }
    public function about()
    {
        require_once 'Public/About.php';
    }
    public function contact()
    {
        require_once 'Public/Contact.php';
    }
    
}

?>