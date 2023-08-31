<?php
include("config.php");

$fname  =   $_POST['fname'];
$lname  =   $_POST['lname'];
$email  =   $_POST['email'];
$phone  =   $_POST['phone'];
$pass   =   $_POST['pass'];
$cpass  =   $_POST['cpass'];
$gender =   $_POST['gender'];
$place  =   $_POST['place'];
$address    =   $_POST['address'];


        $target_dir = "upload/"; // this used to upload the file
        $file_name  =   $_FILES['image']['name']; //Is Used to Store the file.

        $file_target =  $target_dir.$file_name;


// $query = Select * from admission
$query  = mysqli_query ($conn, "Select * from admission where email = '".$email."'"); // This query is used for execution
$num    = mysqli_num_rows($query); // this query is used to count the number of entry.

// print_r ($num);

if($num<1){

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $file_target)) {

    
    $insert_query = "INSERT INTO `admission` (`sno`, `fname`, `lname`, `email`, `phone`, `pass`, `cpass`, `gender`, `place`, `address`,`image`) VALUES (NULL, '$fname', '$lname', '$email', '$phone', '$pass', '$cpass', '$gender', '$place', '$address', '$file_name')";

    mysqli_query ($conn, $insert_query);

    header("location: form.php"); // this funtion hit back to form page after the form submit.
}

else {
        echo "Email already register";
    }
}

// print_r($insert_query); This is used to check the query is executing or not.


// if($result){
//     echo "Data has been inserted into Database";
// }else {
//     echo "Data has been not inserted";
// }


?>