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
        <title>Register</title>
    </head>
    <body>
<?php
 include 'Header.php';
?>
        <div class="content">
           
          <div class="reg">
              <div class="inregleft"></div>
              <div class="inregright">
<form action="" method="post">
    <br>
  Username:<br>
  <input type="text" name="username" class="textbox"><br>
  Password:<br>
  <input type="text" name="password" class="textbox"><br>
  Surname:<br>
  <input type="text" name="surname" class="textbox"><br>
  Full names:<br>
  <input type="text" name="fullname" class="textbox"><br>
  Gender:<br>
  <input type="radio" name="gender" value="male" > Male
  <input type="radio" name="gender" value="female"> Female<br>
  ID No.:<br>
  <input type="text" name="idNo" class="textbox"><br>
  Email:<br>
  <input type="text" name="email" class="textbox"><br>
  Cell No.:<br>
  <input type="text" name="cell" class="textbox"><br>
  Tell No.:<br>
  <input type="text" name="tell" class="textbox"><br>
  Role:<br>
  <input type="radio" name="role" value="Admin"> Admin
  <input type="radio" name="role" value="Client" > Client
  <input type="radio" name="role" value="Manager" > Manager<br>
  Company:<br>
  <input type="text" name="comp_id" class="textbox"><br>
  <br>
<br><br>
      <input type=hidden name=controller value='Register'>
       <input type=hidden name=action value='registerUser'>
        <button type="submit" name="btnRegister" class="button" value="Submit">Register</button><br>
  <br><br>
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