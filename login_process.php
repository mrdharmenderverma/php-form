<?php
 
 include("config.php");
 session_start();

 if(isset($_POST['submit']))
 {

   $email = $_POST['email'];
   $password = $_POST['pass'];
      
    $table_select =  "select * from admission where email= '".$email."' and pass= '".$password."'"; // This query fetch email and password from the table.

    $sql = mysqli_query($conn, $table_select); // This query connect the table with database.

    // print_r( $sql);
    // die;
    $num = mysqli_num_rows($sql);  // This query fetch the data in array form.
    
    if($num=="1"){

        $_SESSION['login_user']=$email;

        header("location: dashboard.php");
    }else{
        echo "Your Details Not Matched";
    }

       
 }

 ?>