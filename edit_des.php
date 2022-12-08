<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","root","","tour") or die("connection failed");
    $des_id=$_GET['id'];
    $place=$_POST['place'];
    $country=$_POST['country'];
    $bus=$_POST['bus'];
    $train=$_POST['train'];
    $flight=$_POST['flight'];
    $food=$_POST['food'];
    $person=$_POST['person'];
    $day=$_POST['day'];
    $night=$_POST['night'];
    $desc=$_POST['desc'];
    $sql="UPDATE `destination` SET `place`='$place',`country`='$country',`bus_price`='$bus',`train_price`='$train',`flight_price`='$flight',`food_price`='$food',`number_of_person`=' $person',`days`='$day',`night`='$night',`des`='$desc' WHERE id='$des_id'";
    if(mysqli_query($con,$sql)){
      header('Location: http://localhost/tour/Admin/viewdes.php');
    }
  else{
    echo "Query Failed.";
  }
    // mysqli_close($con);
}
?>
<?php
//  error_reporting(0);
 include('admin_nav.php');
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$des_id=$_GET['id'];
$sql="SELECT * FROM `destination` WHERE id='$des_id'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
?>
<!-- Section: Design Block -->
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="../imag/p18.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Edit Destination</h3>
            <form class="px-md-2" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="place" value="<?php echo $row['place']; ?>" />
                <label class="form-label" for="form3Example1q">Place</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="country" value="<?php echo $row['country']; ?>"  />
                <label class="form-label" for="form3Example1q">Country</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="bus" value="<?php echo $row['bus_price']; ?>"  />
                <label class="form-label" for="form3Example1q">Bus Price</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="train" value="<?php echo $row['train_price']; ?>"  />
                <label class="form-label" for="form3Example1q">Train Price</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="flight" value="<?php echo $row['flight_price']; ?>" />
                <label class="form-label" for="form3Example1q">Flight Price</label>
              </div>
              <div class="form-outline mb-4">
                <input type="file" id="form3Example1q" class="form-control" name="image1" />
                <label class="form-label" for="form3Example1q"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="file" id="form3Example1q" class="form-control" name="image2"  />
                <label class="form-label" for="form3Example1q"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="file" id="form3Example1q" class="form-control" name="image3"   />
                <label class="form-label" for="form3Example1q"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="file" id="form3Example1q" class="form-control" name="image4"  />
                <label class="form-label" for="form3Example1q"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="food" value="<?php echo $row['food_price']; ?>" />
                <label class="form-label" for="form3Example1q">Food Price</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="person" value="<?php echo $row['number_of_person']; ?>" />
                <label class="form-label" for="form3Example1q">Number of Person</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="day" value="<?php echo $row['days']; ?>" />
                <label class="form-label" for="form3Example1q">Days</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="night"  value="<?php echo $row['night']; ?>" />
                <label class="form-label" for="form3Example1q">Night</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="desc" value="<?php echo $row['des']; ?>" />
                <label class="form-label" for="form3Example1q">Discription</label>
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1" name="submit">Edit</button>
              <?php
                 } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
</section>

<!-- Section: Design Block -->
<script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>