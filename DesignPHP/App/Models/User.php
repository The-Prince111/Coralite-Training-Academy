<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User
{
    public $u_username;
    public $u_password;


    public function __construct($pusername,$ppassword)
     {
        $this->u_username = $pusername ;
        $this->u_username = $ppassword ;
     }
     
     public static function getUser($u_username, $u_password)
     {
         $list = array();
         $db = DBConn::getInstance();
         $sql = "SELECT user_username,user_role,company_no FROM tbluser WHERE user_username = '$u_username' AND user_password = '$u_password' LIMIT 1";
         
         $sqlExe = $db->query($sql);
         
         $i = 0;
         foreach ($sqlExe->fetchAll() as $user)
         {
             $list[] = new User($user['user_username'],$user['user_role'],$user['company_no']);
             $i++;
         }
         if($list[0] != null)
         {
             echo 'Got a User';
             return $list[0];
         }
            else 
                {    
                echo 'No Users';
                return false;
                
                }
     }
}



?>
