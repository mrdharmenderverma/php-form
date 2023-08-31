<!-- INSERT INTO `admission` (`sno`, `fname`, `lname`, `email`, `phone`, `pass`, `cpass`, `gender`, `place`, `address`) VALUES (NULL, 'Rahul', 'Verma', 'rahul@gmail.com', '971662548', '123456', '123456', 'male', 'Delhi', 'Badarpur'); -->
<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                <button type="button" class="btn btn-info me-2"> <a href="login.php"
                        style="text-decoration:none; color:#fff;">Login</a></button>
                <button type="button" class="btn btn-warning"><a href="logout.php"
                        style="text-decoration:none; color:#000;">Logout</a></button>
            </div>
        </div>
    </nav>
    <!-- Navigation End -->

    <div class="container" style="margin-top:50px;">
        <h2>Students Details</h2>
        <form action="dbinsert.php" method="post" enctype="multipart/form-data">
            <div class="row g-3 align-items-center col-md-8" style="margin: 20px 0px;">
                <div class="col-md-6">
                    <input type="text" name="fname" placeholder="First Name" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="text" name="lname" placeholder="Last Name" class="form-control">
                </div>
                <div class="mb-0">
                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                </div>
                <div class="mb-0">
                    <input type="number" class="form-control" name="phone" placeholder="Mobile Number">
                </div>
                <div class="mb-0">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required>
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
                    <textarea class="form-control" style="height: 80px" name="address"></textarea>
                    <label for="floatingTextarea2">Address</label>
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <!-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label> -->
                </div>
                <button type="submit" class="btn btn-primary col-md-3">submit</button>
            </div>
    </div>
    </form>
    </div>

    <div class="container">
        <table class="table table-dark">
            <thead class="p-3 mb-2 bg-info text-white">
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Password</th>
                    <th scope="col">Confirm Password</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
                $sqlquery= "select * from admission"; 
                $num = mysqli_query($conn, $sqlquery);
                // $numrow = mysqli_num_rows($num); This query is used to count the numbers of rows
                // echo $numrow;
                while($numarray = mysqli_fetch_array($num)) // this function is used to fatch the arrray
                {

                    ?>
            <tbody>

                <tr>
                    <th scope="row"><?php echo $numarray['sno'];?></th>
                    <td><?php echo $numarray['fname'];?></td>
                    <td><?php echo $numarray['lname'];?></td>
                    <td><?php echo $numarray['email'];?></td>
                    <td><?php echo $numarray['phone'];?></td>
                    <td><?php echo $numarray['gender'];?></td>
                    <td><?php echo $numarray['pass'];?></td>
                    <td><?php echo $numarray['cpass'];?></td>
                    <td><?php echo $numarray['place'];?></td>
                    <td><?php echo $numarray['address'];?></td>
                    <td><img src="upload/<?php echo $numarray['image'];?>" style="max-width:50%;"></td>
                    <td style="display: grid;"><a class="btn btn-primary mt-30"
                            href="edit.php?sno=<?php echo $numarray['sno']; ?>" style="margin-bottom:10px"
                            role="button">Edit</a> <a class="btn btn-danger"
                            href="delete.php?sno=<?php echo $numarray['sno'];?>" ;>Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php }?>
        </table>
    </div>

</body>

</html>