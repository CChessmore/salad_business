<?php

class form{

  function askEmail(){
    ?>
      <form method ="POST">
        <div>Please enter your email: <input name="email" type="email"/></div>
        <div><button type="submit">Okay!</button></div>
      </form>
    <?php
  }#end of askEmail

  function askPassword($email){
    if(isset($_POST['new_password']) && $_POST['new_password']==$_POST['new_password_clone']){
      $mySQL -> update ("UPDATE users SET password=? WHERE email=?;",password_hash($_POST['new_password'],PASSWORD_DEFAULT),$email);
    }
    else {
      echo'Enter a vaild password combination. As these two do not match.';
    }
    ?>
      <form method ="POST">
        <div>Your Email: <input name="email" type="email"/></div>
        <div>New Password: <input name="new_password" type="text"/></div>
        <div>Repeat your new password: <input name="new_password_clone" type="text"/></div>
        <div><button type="submit">Okay!</button></div>
      </form>
    <?php
  }#end of askPassword

}#end of form class
