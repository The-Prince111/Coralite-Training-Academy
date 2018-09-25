<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="body">
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../Lib/home.css" rel="stylesheet" type="text/css"/>
        <title>Registration Successfull</title>
    </head>
    <body>
<?php
 include 'Header.php';
?>
        <div class="content">  
            
          <div class="login">
              <div class="inloginleft">You have been succesfully registered on the Tender Coporation System</div>
              <div class="inloginright">
                  <form action="" method="post">
    <br>
    <br>
    <br>
    <br>
        <input type=hidden name=controller value=Index>
	<input type=hidden name=action value=index>
 <input type="submit" name="btnHome" class="button" value="index"><br><br>
      	<input type=hidden name=controller value=Menu>
	<input type=hidden name=action value=menu>
  <input type="submit" name="btnContinue" class="button" value="Continue"><br><br>
    <br>
</form> 
              </div>

            </div>
        </div>
            <br>
    <br>
    <br>
        <div class="clear"></div>
<?php
include 'Footer.php';
?>
    </body>
</html>
</div>