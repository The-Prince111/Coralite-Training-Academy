<?php
require_once 'App/Controllers/Controller.php';
require_once 'App/Models/Register.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class RegisterController extends Controller
{
    public function registerView()
    {
        $this->view->message = 'My register Page Controller';
        $this->view->render('App/Views/Public/Register.php');
    }
    public function error()
    {
        $this->view->message = 'My Error Page Controller';
        $this->view->render('App/Views/Public/Error.php');
    }
    public function register()
    {
        //Get All User Data
        if(isset($_POST['btnRegister']))
        {
          $pUsername = $_POST["username"];
            $pPassword = $_POST["password"];
            $pSurname = $_POST["surname"];
            $pFullnames = $_POST["fullname"];
            $pGender = $_POST["gender"];
            $pIDNo = $_POST["idNo"];
            $pEmail = $_POST["email"];
            $pCell = $_POST["cell"];
            $pTell = $_POST["tell"];
            $pRole = $_POST["role"];
            $Company = $_POST["comp_id"];
           
               Register::addUser($pUsername,$pPassword,$pSurname,$pFullnames,$pGender,$pIDNo,$pEmail,$pCell,$pTell,$pRole,$Company);
        }
          else if(!isset($_POST['btnRegister']))
          {
              require_once 'Public/Register.php';
              
          }
         else 
             {
                     echo'No Values';
            }
    
    }
}

?>

