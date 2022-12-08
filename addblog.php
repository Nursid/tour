<?php
 include('admin_nav.php');
?>
<?php
 $con=mysqli_connect("localhost","root","","tour") or die("connection failed");
if(isset($_FILES['image'])){
    $error=array();
      $file_name=$_FILES['image']['name'];
      $file_size=$_FILES['image']['size'];
      $file_tmp=$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      // move_uploaded_file($file_tmp,"uploade/".$file_name);
      $file_exe=end(explode(".",$file_name));
      $extension=array("png","jpeg","jpg","webp");
      if(in_array($file_exe,$extension)===false){
         $error[]="this file is not allowed plz choose a PNG or JPG..";
      }
      if($file_size > 5242880){
        $error[]="file must be 5mb or lower";
      }
      if(empty($error)==true){
        move_uploaded_file($file_tmp,"uploade/".$file_name);
      }
      else{
        print_r($error);
        die();
      }
  }
 if(isset($_POST['submit'])){ 
$tile=$_POST['title'];
$date=$_POST['date'];
$desc=$_POST['desc'];
$sql="INSERT INTO `blog`(`title`, `date`, `image`, `disc`) VALUES ('$tile','$date','$file_name','$desc')";
if(mysqli_query($con,$sql)){
  header('Location: http://localhost/tour/Admin/viewblog.php');
}
else{
  echo "Query Failed.";
}
 }
?>
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->
  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Add Blog</h2>
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" name="title" />
                  <label class="form-label" for="form3Example1">title Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" name="date" />
                  <label class="form-label" for="form3Example2">Date's</label>
                </div>
              </div>
            </div>
            <!-- Email input -->
            <div class="form-group">
            <label for="exampleFormControlTextarea1"></label>
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Discription" name="desc"></textarea>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="file" id="form3Example1q" class="form-control" name="image"/>
                <label class="form-label" for="form3Example1q"></label>
              </div>
            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit"> 
            Add Blog
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>