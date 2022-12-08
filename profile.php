<?php
error_reporting(0);
include('user_nav.php');
session_start();
$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$sql="SELECT * FROM `registration` WHERE `email` = '$email'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
    ?>
<h1 style="text-align: center;">Admin profile</h1>
<div class="col-lg-8">
    <?php
while($rows=mysqli_fetch_assoc($result)){
    ?>
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $rows['name']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $rows['email']; ?></p>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $rows['number']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $rows['gender']; ?></p>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        <h3 style="float:left; padding: 10px;"><a href="#edit_profile.php?page=<?php echo $rows['id'];?>" class="float-right btn btn-primary padding-bottom">Edit</a></h3>
        <?php } } ?>
       
</html>