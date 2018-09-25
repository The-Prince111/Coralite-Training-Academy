<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="body">
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../Lib/home.css" rel="stylesheet" type="text/css"/>
        <title>Login</title>
    </head>
    <body>
<?php
 include 'Header.php';
?>
        <div class="content">  
            
          <div class="login">
              <div class="inloginleft"></div>
              <div class="inloginright">
                  <form action="" method="post">
    <br>
    <br>
    <br>
  Username<br>
  <input type="text" name="username" class="textbox"><br><br>
  Password<br>
  <input type="text" name="password" class="textbox"><br><br><br>
    <br>
      	<input type=hidden name=controller value=Login>
	<input type=hidden name=action value=login>
  <input type="submit" name="btnLogin" class="button" value="login"><br><br>
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