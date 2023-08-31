<?php
include("config.php");
session_start();
//  print_r($_SESSION);

 $email= $_SESSION['login_user'];

 $sql= "Select * from admission where email= '".$email."' ";
 $num1 =mysqli_query($conn, $sql);

 $numarr= mysqli_fetch_array($num1);


//  this code work to save the cookie into table database.
 $cookie_email =$numarr['email'];
 $cookie_name =$numarr['fname'];   //yaha par "fname" jo vo database ke admission table ka colume name hain.
    //$cookie_value = $numarr['email'];
    setcookie($cookie_name, $cookie_email, time() + (86400 * 30), "/");    
    if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {    
    // echo "Cookie '" . $cookie_name . "' is set!<br>";
    // echo "Value is: " . $_COOKIE[$cookie_name];    
    $ins="insert into cookies set name='".$cookie_name."', email='".$cookie_email."'"; // or yaha par jo "name" hain vo database ke cookie table ka col name hain 
    mysqli_query($conn, $ins);
  }

//  print_r($numarr);

// echo $name= $numarr['fname']; echo "<br>";
// echo $name= $numarr['lname']; echo "<br>";
// echo $name= $numarr['phone']; echo "<br>";
// echo $name= $numarr['pass']; echo "<br>";
// echo $name= $numarr['cpass']; echo "<br>";
// echo $name= $numarr['email']; echo "<br>";

//  echo $name= $numarr['fname'];
//  echo $name= $numarr['fname']; 

?>
<!-- INSERT INTO `admission` (`sno`, `fname`, `lname`, `email`, `phone`, `pass`, `cpass`, `gender`, `place`, `address`) VALUES (NULL, 'Rahul', 'Verma', 'rahul@gmail.com', '971662548', '123456', '123456', 'male', 'Delhi', 'Badarpur'); -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP Practice</title>
</head>

<body>
    <!-- Navigation Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success me-2" type="submit">Search</button>
                </form>
                <!-- <button type="button" class="btn btn-info me-2"> <a href="login.php" style="text-decoration:none; color:#fff;">Login</a></button> -->
                <button type="button" class="btn btn-warning"><a href="logout.php"
                        style="text-decoration:none; color:#000;">Logout</a></button>
            </div>
        </div>
    </nav>
    <!-- Navigation End -->

    <!--Tab Start-->
    <div class="container my-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">Dashboard</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Post</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">Profile Details</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nobis est asperiores, repudiandae
                doloremque quasi aut sequi ab quod? Laboriosam incidunt consequuntur magnam illum animi saepe excepturi
                ab debitis suscipit.
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- Start Form -->
                <div class="container my-5 col-md-6">
                    <h2 class="my-3">Create A New Post</h2>
                    <form action="post_insert.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Post Title" name="post_title">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Post Tag" name="post_tags">
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="post_image">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="post_description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Add Post</button>
                    </form>
                </div>
                <!-- End Form -->


                <!-- Grid Start -->
                <div class="container">
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="col-sm-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ullam?
                            Eligendi aperiam ipsum fugit, molestiae voluptates quibusdam accusantium maiores eum
                            expedita officia quam repudiandae ea, reprehenderit quaerat distinctio rerum optio.</div>
                        <div class="col-sm-6"><img src="post_image/nature-gf3e7a9de5_1280.jpg" class="img-fluid"
                                alt="..."></div>

                    </div>
                </div>
                <!-- Grid End -->

            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table my-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <td><?php echo $name= $numarr['fname'] ;?>
                                <?php echo $name= $numarr['lname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">Mobile Number</th>
                            <td><?php echo $name= $numarr['phone'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Email Address</th>
                            <td><?php echo $name= $numarr['email'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Address</th>
                            <td><?php echo $name= $numarr['address'];?></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>





    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- ck editor -->
    <script src="ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('exampleFormControlTextarea1');
    </script>

</body>

</html>