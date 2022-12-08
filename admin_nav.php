<?php
session_start();
include('index.php');
$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$sql="SELECT * FROM `registration` WHERE `email` = '$email'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
while($rows=mysqli_fetch_assoc($result)){
    ?>
  <!-- start navbar -->
  <section>
  <div class="shadow p-1 mb-1 bg-white rounded">
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#343a40 !important;">
    <div class="container-fluid">
          <div class="col-auto">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="allusers.php">All user</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="addblog.php">Add blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="adddes.php">Add Destination</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="viewblog.php">View Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="viewdes.php">View Destination</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="viewbook.php">View Booking</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view_contact.php">View Contact</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="adminchngpass.php">Change Password</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="admin_logout.php">Logout</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-warning btn-rounded btn-sm active" href="admin_profile.php">Welcome <?php echo $rows['name'];  ?></a>
                </li>
                <li class="nav-item">
                 <!-- <li class="nav-item">
                   <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-success btn-rounded btn-sm" type="submit">Search</button> 
                  </form> 
                </li> -->
                </li>
              </ul>
            </div>
            </div> 
        </div>
      </div>
      </nav>
  </section>
 <?php } }?>
  <script src="../js/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
