

<?php
error_reporting(0);

$servername = "localhost";
$username   = "root";
$user_pass  = "";
$db_name    = "student_details";

$conn   = mysqli_connect($servername, $username, $user_pass, $db_name);

if(!$conn){

        // echo "Database connected"

        echo "Database Not Connected". die;
}





?>