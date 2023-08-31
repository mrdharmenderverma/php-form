<?php
include("config.php");

if(isset($_POST['submit']))
{
$fname  =   $_POST['fname'];
$lname  =   $_POST['lname'];
$email  =   $_POST['email'];
$phone  =   $_POST['phone'];
$pass   =   $_POST['pass'];
$cpass  =   $_POST['cpass'];
// $gender =   $_POST['gender'];
$place  =   $_POST['place'];
$address    =   $_POST['address'];
$sno        =   $_POST['sno'];

$target_dir = "upload/"; // this used to upload the file
$file_name  =   $_FILES['image']['name']; //Is Used to Store the file name.

$file_target =  $target_dir.$file_name;

if(move_uploaded_file($_FILES['image']['tmp_name'], $file_target)){
        $old_img = $file_name; // To Upload New Image
}else{
        $old_img = $_POST['old_image']; 
}



$update_query  = "UPDATE `admission` SET `fname`='$fname',`lname`='$lname',`email`='$email',`phone`='$phone',`pass`='$pass',`cpass`='$cpass', `place`='$place',`address`='$address',`image`='".$old_img."' WHERE sno = '".$sno."'";


$update = mysqli_query($conn, $update_query); // executation query




// if($update){

//         echo "Data Updated";
// }else{
//         echo "Data NOt Updated";
// }
header("location: form.php");

}
?>