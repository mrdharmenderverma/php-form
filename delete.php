<?php
include("config.php");

$idd    = $_GET['sno'];

$delete = mysqli_query($conn, "DELETE FROM `admission` WHERE sno = '".$idd."'" );

// die;

// if($delete){

//     echo "Data has been Deleted";
// }else{

//     echo "Deta has not been Deleted";
// }
header("location: form.php");

?>