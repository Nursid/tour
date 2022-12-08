<?php 
include('navbar.php')?>
<?php
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$sql="SELECT * FROM `blog`";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
    ?>
    <div class="p-3 mb-2 bg-light text-dark text-center"><h4>View Blog</h4></div>
    <div class="container"> 
    <div class="row gy-3 my-3" >
    <?php
  while($rows=mysqli_fetch_assoc($result)){
?>
           <div class="col-sm-6 col-md-4 col-lg-3">
             <div class="card">
               <img class="card-img-top" src="Admin/uploade/<?php echo $rows['image'] ?>" alt="Image">
               <div class="card-body">
                 <h5 class="card-title"><?php echo $rows['title'] ?></h5>
                 <p class="card-text"><?php echo $rows['disc'] ?></p>
                 <p class="card-text"><small class="text-muted "><?php echo $rows['date'] ?></small></p>
                 <a href="#" class="btn btn-primary">Go More</a>
               </div>
             </div>
           </div>
  <?php }
  ?>
  </div>
  </div>
  <?php
   }
 ?>
 