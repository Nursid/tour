<?php
   include "user_nav.php"; 
  // session_start();
?>
<?php
// $id=$_SESSION['id'];
// $con=mysqli_connect("localhost","root","","tour") or die("connection failed");
// $sql="SELECT * FROM book where id='$id'";
// $result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
// if(mysqli_num_rows($result) > 0){
?>  
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="../imag/p18.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Book Tour</h3>
            <form class="px-md-2" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
              <div class="form-outline mb-4">
              <?php
            //  while($rows=mysqli_fetch_assoc($result)){
             ?>
                <input type="text" id="form3Example1q" class="form-control" name="name" />
                <input type="hidden" id="form3Example1q" class="form-control" name="id"/>

                <label class="form-label" for="form3Example1q">Name</label>
              </div>
              <div class="form-outline mb-4">
                <input type="email" id="form3Example1q" class="form-control" name="email" />
                <label class="form-label" for="form3Example1q">Email</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="email" />
                <label class="form-label" for="form3Example1q">Gender</label>
              </div>
              <div class="form-outline mb-4">
                <input type="email" id="form3Example1q" class="form-control" name="email" />
                <label class="form-label" for="form3Example1q">Email</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="number" />
                <label class="form-label" for="form3Example1q">Mobile No</label>
              </div>  
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control" name="total_price" value=<?php //$rows['total_price']; ?>/>
                <label class="form-label" for="form3Example1q">Total Price</label>
              </div>
              <button type="submit" class="btn btn-danger btn-lg mb-1" name="save">Conform</button>
              <?php // } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php // } ?>
</section>
<script type="text/javascript" src="../Admin/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>
