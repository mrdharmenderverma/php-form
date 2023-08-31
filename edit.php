<?php include("config.php");
$idd    = $_GET['sno'];
$sql= mysqli_query($conn, "select * from admission where sno = '".$idd."'");
$num = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Edit Details</title>
</head>
<body>
    <!-- Start navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <!-- End Navigation bar -->

    <!-- Form Start -->
    <div class="container" style="margin-top:50px;">
        <h2>Edit Your Details</h2>
        <form action ="db_update.php" method="post" enctype="multipart/form-data">
             <div class="row g-3 align-items-center col-md-8" style="margin: 20px 0px;">     
                <div class="mb-0">   
                    <input type="hidden"  name="sno" value="<?php echo $num['sno'];?>">                
                </div>           
                <div class="col-md-6">
                    <input type="text" name="fname" placeholder="First Name" class="form-control" value="<?php echo $num['fname'];?>">
                </div>
                <div class="col-md-6">
                    <input type="text" name="lname" placeholder="Last Name" class="form-control" value="<?php echo $num['lname'];?>">
                </div>  
                <div class="mb-0">   
                    <input type="text" class="form-control" name="email" placeholder="Email Address" value="<?php echo $num['email'];?>">                
                </div>
                <div class="mb-0">   
                    <input type="number" class="form-control" name="phone" placeholder="Mobile Number" value="<?php echo $num['phone'];?>">                
                </div>
                <div class="mb-0">                
                    <input type="text" name ="pass" class="form-control" placeholder="Password" value="<?php echo $num['pass'];?>">
                </div>
                <div class="mb-3">   
                    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password"  value="<?php echo $num['cpass'];?>">                
                </div>
                <div class="" style="display: inline-flex;">
                    <h5 style="margin-right:10px;">Gender</h5>         
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div> 
                </div>   
                <div class="col-md">
                    <div class="form-floating">
                        <select id="" class="select" name="place">
                            <option value="City">City</option>
                            <option value="Badarpur">Badarpur</option>
                            <option value="Siliguri">Siliguri</option>                            
                            <option value="jaipur">jaipur</option>
                            <option value="Vinay Nagar">Vinay Nagar</option>
                            <option value="Rajasthan">Kanpur</option>
                        </select>              
                    </div>
                </div>                
                <div class="form-floating">
                    <textarea class="form-control" style="height: 80px" name ="address" value="<?php echo $num['address'];?>"></textarea>
                    <label for="floatingTextarea2">Address</label>
                </div>   
                <div class="custom-file">
                    <label class="custom-file-label" for="inputGroupFile01">Current Image</label> 
                    <img src="upload/<?php echo $num['image'];?>" style="max-width:20%;">  <!--to Call Current image-->
                    <input type="file" class="custom-file-input" name="image">
                    <input type="hidden" class="custom-file-input" name="old_image" value="<?php echo $num['image'];?>">
                    
                </div>
                    <button type="submit" name="submit" class="btn btn-primary col-md-3">Update</button>      
                </div>         
            </div>
        </form>        
    </div>
    <!-- End Form -->   
    
</body>
</html>