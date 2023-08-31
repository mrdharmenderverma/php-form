<?php
 
 include("config.php");
 session_start(); // from this session is started.
 
 unset($_SESSION['login_user']); //
  
 session_destroy(); // This Destory the loign session.

 header("location: login.php"); // This will redirect to login page.
 ?>

 