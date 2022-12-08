<?php
//error_reporting(0);
    include "user_nav.php";
?>
<h1 style="text-align: center;">View Details</h1>
<?php
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$des_id=$_GET['id'];
$sql="SELECT * FROM `destination` WHERE id='$des_id'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
?>
<form action="booktour.php" method="post">
    <div class="container">
<div class="row g-2">
    <?php while($row=mysqli_fetch_assoc($result)){ 
        ?>
              <div class="col mb-2">
                <img src="../Admin/uploade/<?php echo $row['image_1'] ?>" height="300px"
                  alt="image 1" class="w-100 rounded-3">
              </div>
              <div class="col mb-2">
              <img src="../Admin/uploade/<?php echo $row['image_2']; ?>" height="300px"
                  alt="image 1" class="w-100 rounded-3">
              </div>
            </div>
            <div class="row g-2"> 
              <div class="col">
                <img src="../Admin/uploade/<?php echo $row['image_3']; ?>" height="300px"
                  alt="image 1" class="w-100 rounded-3">
              </div>
              <div class="col">
                <img src="../Admin/uploade/<?php echo $row['image_4']; ?>" height="300px"
                  alt="image 1" class="w-100 rounded-3">
              </div>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="form-outline mb-4">
        <input type="text" id="form6Example1" class="form-control" value="<?php echo $row['place']; ?>" readonly/>
        <label class="form-label" for="form6Example1">Place</label>
      </div>
    <div class="form-outline mb-4">
   
        <input type="text" id="form6Example2" class="form-control" value="<?php echo $row['country']; ?>" readonly/>
        <label class="form-label" for="form6Example2">Country</label>
  </div>
  <!-- Text input -->
  <div class="form-outline mb-4">
   <input type="text" id="form6Example2" class="form-control" value="<?php echo $row['days'] ?> Days , <?php echo $row['night']?> Night" readonly />
   <label class="form-label" for="form6Example2">Date</label>
</div>
  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" value="<?php echo $row['number_of_person']; ?>" readonly/>
    <label class="form-label" for="form6Example6">Number Of Person</label>
  </div>
  <!-- Message input -->
  <div class="form-outline mb-4">
  <input type="text" id="form6Example2" class="form-control" value="<?php echo $row['des']; ?>" readonly/>
    <label class="form-label" for="form6Example7">Description</label>
  </div>
  <div class="form-outline mb-4">
    <input type="date" id="form6Example4" class="form-control" name="date" />
    <label class="form-label" for="form6Example4">Booking Date</label>
  </div>
  <div class="form-outline mb-4">
  <select class="form-select  dropdown-toggle" aria-label="Default select example" name="tour">
                     <div class="dropdown-menu">
                     <option selected disabled>Travelling</option>
                       <option class="dropdown-item" value="<?php echo $row['bus_price']; ?>">Bus Price</option>
                        <option class="dropdown-item" value="<?php echo $row['train_price']; ?>">Train Price</option>
                        <option class="dropdown-item" value="<?php echo $row['flight_price']; ?>">Flight Price</option>
                        </div>
                        </select>
    </div>

<div class="form-outline mb-4">
  <label for="">Food:</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="food" id="inlineRadio1" value="<?php echo $row['food_price']; ?>">
  <label class="form-check-label" for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="food" id="inlineRadio2" value="0">
  <label class="form-check-label" for="inlineRadio2">No</label>
</div>
  </div>
    </div>
  <?php } ?>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Place order</button>
  </div>
  </div>
</form>
<?php } ?>
<script type="text/javascript" src="../Admin/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>