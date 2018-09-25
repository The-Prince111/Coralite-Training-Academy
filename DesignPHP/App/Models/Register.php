<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Register
{
    public $rUsername;
    public $rPassword;
    public $rSurname;
    public $rFullnames;
    public $rGender;
    public $rIDNo;
    public $rEmail;
    public $rCell;
    public $rTell;
    public $rRole;
    public $rCompany;
    
    public function __construct($uUsername,$uPassword,$uSurname,$uFullnames,$uGender,$uIDNo,$uEmail,$uCell,$uTell,$uRole,$uCompany)
    {
        $this->rUsername =$uUsername;
        $this->rPassword = $uPassword;
        $this->rSurname = $uSurname;
        $this->rFullnames = $uFullnames;
        $thid->rGender = $uGender;
        $this->rIDNo = $uIDNo;
        $this->rEmail = $uEmail;
        $this->rCell = $uCell;
        $this->rTell = $uTell;
        $this->rRole = $uRole;
        $this->rCompany = $uCompany;
    }
    
    public static function addUser($rUsername,$rPassword,$rSurname,$rFullnames,$rGender,$rIDNo,$rEmail,$rCell,$rTell,$rRole,$rCompany)
    {
        
        $sql = "INSERT INTO tbluser(user_username, user_password,user_surname,user_name,user_gender, user_idNr, user_email, user_cellNr, user_tellNr, user_role, company_no ) "
        ." VALUES ('$rUsername','$rPassword','$rSurname','$rFullnames','$rGender','$rIDNo','$rEmail','$rCell','$rTell','$rRole','$rCompany' )" ;

        $db = DBConn::getInstance();
        $db->query($sql);
        
        require_once  'Public/RegistrationSuccess.php';
    }

}
?>
