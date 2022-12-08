<?php
session_start();
$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$sql="SELECT * FROM `registration` WHERE `email` = '$email'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
while($rows=mysqli_fetch_assoc($result)){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"/>
        <link rel="stylesheet" href="../md/mdb.min.css">
   <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <!-- start navbar -->
  <section>
    <div class="shadow p-1 mb-1 bg-dark rounded">
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#343a40 !important;">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="col-auto">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="user.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mybook.php">My Booking</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="viewblog.php">View Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="change_pass.php?pass=<?php echo $_SESSION['password'];?>">Change Password</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="user_logout.php">logout</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-warning btn-rounded btn-sm active" href="profile.php">Welcome <?php echo $rows['name'];  ?></a>
                </li>
                <li class="nav-item">
                 <li class="nav-item">
                 <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-success btn-rounded btn-sm" type="submit">Search</button> 
                  </form> 
                  <?php } ?> 
                </li>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <?php } ?>
  </section>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>