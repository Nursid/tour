<?php
include ("user_nav.php");?>
<?php
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$sql="SELECT * FROM `destination`";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
    ?>
  <h1>Our Destination</h1>
    <p>choose your Next Destination</p>
    <div class="container"> 
    <div class="row gy-3 my-3" >
    <?php
  while($rows=mysqli_fetch_assoc($result)){
?>
  <!-- start DESTINATION -->
  
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <a href="view_detalis.php?id=<?php echo $rows['id']; ?>"><img class="card-img-top" src="../Admin/uploade/<?php echo $rows['image_1'] ?>" alt="Card image cap"></a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $rows['place']?>,<?php echo $rows['country'];?></h5>
              <p class="card-text"><small class="text-muted "><?php echo $rows['days']; ?>days,<?php echo $rows['night']; ?> night</small></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  <!-- start footer -->
  <!-- end footer  -->
  <script src="../js/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
  <?php include('../footer.php');?>
  <!-- end footer  -->
 <!-- js file start  -->
</body>
</html>