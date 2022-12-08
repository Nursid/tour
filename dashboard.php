<?php
include('admin_nav.php')
?>
<h1 style="text-align: center;">Dashboard </h1>
<div class="container">
    <div class="row">
  <!-- start DESTINATION -->
        <div class="col-xl-3 col-md-6">
          <div class="card bg-primary text-white mb-4">
            <div class="card-body">Total Destination</div>
            <?php
            include("../config.php");
            $sql="SELECT * FROM `destination`;";
            $result=mysqli_query($con,$sql);
            if($total= mysqli_num_rows($result)){
              echo '<h4 style="text-align: center;">'.$total.'</h4>';
            }
            else{
              echo '<h4 style="text-align: center;">No data</h4>';
            }
            ?>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a href="viewdes.php" class="small text-white stretched-link">view Details</a>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
          <div class="card bg-warning text-white mb-4">
            <div class="card-body">Total Blog </div>
            <?php
            include("../config.php");
            $sql="SELECT * FROM `blog`;";
            $result=mysqli_query($con,$sql);
            if($total= mysqli_num_rows($result)){
              echo '<h4 style="text-align: center;">'.$total.'</h4>';
            }
            else{
              echo '<h4 style="text-align: center;">No data</h4>';
            }
            ?>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a href="viewblog.php" class="small text-white stretched-link">view Details</a>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
          <div class="card bg-danger text-white mb-4">
            <div class="card-body">Total Contact</div>
            <?php
            include("../config.php");
            $sql="SELECT * FROM `contact`;";
            $result=mysqli_query($con,$sql);
            if($total= mysqli_num_rows($result)){
              echo '<h4 style="text-align: center;">'.$total.'</h4>';
            }
            else{
              echo '<h4 style="text-align: center;">No data</h4>';
            }
            ?>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a href="view_contact.php" class="small text-white stretched-link">view Details</a>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
          <div class="card bg-success text-white mb-4">
            <div class="card-body">Total Users</div>
            <?php
            include("../config.php");
            $sql="SELECT * FROM `registration`;";
            $result=mysqli_query($con,$sql);
            if($total= mysqli_num_rows($result)){
              echo '<h4 style="text-align: center;">'.$total.'</h4>';
            }
            else{
              echo '<h4 style="text-align: center;">No data</h4>';
            }
            ?>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a href="allusers.php" class="small text-white stretched-link">view Details</a>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
          <div class="card bg-dark text-white mb-4">
            <div class="card-body">Total Booking</div>
            <?php
            include("../config.php");
            $sql="SELECT * FROM `book`;";
            $result=mysqli_query($con,$sql);
            if($total= mysqli_num_rows($result)){
              echo '<h4 style="text-align: center;">'.$total.'</h4>';
            }
            else{
              echo '<h4 style="text-align: center;">No data</h4>';
            }
            ?>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a href="viewbook.php" class="small text-white stretched-link">view Details</a>
            </div>
            </div>
            </div>
</div>
</div>

<?php
include('../footer.php');
?>