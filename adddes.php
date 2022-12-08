<?php
 include('admin_nav.php');
?>
<?php
error_reporting(0);
if(isset($_FILES['image1']) || isset($_FILES['image2']) || isset($_FILES['image3']) || isset($_FILES['image4']) ){
  $error=array();
  // echo "<pre>";
  // print_r($_FILES);
  // echo "</pre>";
  $file_name1=$_FILES['image1']['name'];
  $file_name2=$_FILES['image2']['name'];
  $file_name3=$_FILES['image3']['name'];
  $file_name4=$_FILES['image4']['name'];

  $file_size1=$_FILES['image1']['size'];
  $file_size2=$_FILES['image2']['size'];
  $file_size3=$_FILES['image3']['size'];
  $file_size4=$_FILES['image4']['size'];

  $file_tmp1=$_FILES['image1']['tmp_name'];
  $file_tmp2=$_FILES['image2']['tmp_name'];
  $file_tmp3=$_FILES['image3']['tmp_name'];
  $file_tmp4=$_FILES['image4']['tmp_name'];

  $file_type1=$_FILES['image1']['type'];
  $file_type2=$_FILES['image2']['type'];
  $file_type3=$_FILES['image3']['type'];
  $file_type4=$_FILES['image4']['type'];

  $file_exe1=end(explode(".",$file_name1));
  $file_exe2=end(explode(".",$file_name2));
  $file_exe3=end(explode(".",$file_name3));
  $file_exe4=end(explode(".",$file_name4));
  $extension=array("png","jpeg","jpg","webp");
  if(in_array($file_exe1,$extension)===false || in_array($file_exe2,$extension)===false || in_array($file_exe3,$extension)===false ||in_array($file_exe4,$extension)===false ){
     $error[]="this file is not allowed plz choose a PNG or JPG..";
  }
  if(($file_size1 > 5242880)|| ($file_size2 > 5242880) ||($file_size3 > 5242880) || ($file_size4 > 5242880)){
    $error[]="file must be 5mb or lower";
  }
  if(empty($error)==true){
    move_uploaded_file($file_tmp1,"uploade/".$file_name1);
    move_uploaded_file($file_tmp2,"uploade/".$file_name2);
    move_uploaded_file($file_tmp3,"uploade/".$file_name3);
    move_uploaded_file($file_tmp4,"uploade/".$file_name4);
  }
  else{
    print_r($error);
    die();
  }
}
 if(isset($_POST['submit'])){
  $con=mysqli_connect("localhost","root","","tour") or die("connection failed");
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
  $sql="INSERT INTO `destination`(`place`, `country`, `bus_price`, `train_price`, `flight_price`, `image_1`, `image_2`, `image_3`, `image_4`, `food_price`, `number_of_person`, `days`, `night`, `des`) VALUES ('$place','$country','$bus','$train','$flight','$file_name1','$file_name2','$file_name3','$file_name4','$food',' $person','$day','$night','$desc')";
  if(mysqli_query($con,$sql)){
    header('Location: http://localhost/tour/Admin/viewdes.php');
  }
else{
  echo "Query Failed.";
}
 }
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Add Destination</h3>
            <form class="px-md-2" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="place"/>
                <label class="form-label" for="form3Example1q">Place</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="country" />
                <label class="form-label" for="form3Example1q">Country</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="bus" />
                <label class="form-label" for="form3Example1q">Bus Price</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="train" />
                <label class="form-label" for="form3Example1q">Train Price</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="flight"/>
                <label class="form-label" for="form3Example1q">Flight Price</label>
              </div>
              <div class="form-outline mb-4">
                <input type="file" id="form3Example1q" class="form-control" name="image1"/>
                <label class="form-label" for="form3Example1q"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="file" id="form3Example1q" class="form-control" name="image2" />
                <label class="form-label" for="form3Example1q"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="file" id="form3Example1q" class="form-control" name="image3" />
                <label class="form-label" for="form3Example1q"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="file" id="form3Example1q" class="form-control" name="image4" />
                <label class="form-label" for="form3Example1q"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="food"/>
                <label class="form-label" for="form3Example1q">Food Price</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="person" />
                <label class="form-label" for="form3Example1q">Number of Person</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="day"/>
                <label class="form-label" for="form3Example1q">Days</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="night" />
                <label class="form-label" for="form3Example1q">Night</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="desc"/>
                <label class="form-label" for="form3Example1q">Discription</label>
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>