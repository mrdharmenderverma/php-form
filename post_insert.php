<?php
include('config.php');

if(isset($_POST['submit'])){



 $p_title = $_POST['post_title'];
 $p_tags = $_POST['post_tags'];
 $p_discription = $_POST['post_description'];
 $p_image = $_POST['post_image'];
 

 $sql = mysqli_query($conn, "insert into post_table SET post_title = '".$p_title."', post_tags= '".$p_tags."', post_description= '".$p_discription."', post_image= '".$p_image."'");

    // if($sql){

    //     echo "Data Inserted";

    // }else{

    //     echo "Data Not Inserted";

    // }

    header("location: dashboard.php");

}

?>