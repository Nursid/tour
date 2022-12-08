<?php
     error_reporting(0);
    include ('navbar.php');
   if(isset($_POST['save'])){
    $con=mysqli_connect("localhost","root","","tour") or die("connection failed");
        $username=$_POST['email'];
       $password=$_POST['password'];
       session_start();
     $sql="SELECT * FROM `registration` WHERE `email`='{$username}' AND `password`='{$password}'";
     $result=mysqli_query($con,$sql);
      // or die("Query Failed.");
      $row=mysqli_fetch_assoc($result);
      if($row['role']=="admin"){
        $_SESSION['email']=$username;
        $_SESSION['password']=$password;
        header('Location: http://localhost/tour/Admin/dashboard.php');
      }
      elseif($row['role']=="user"){
        $_SESSION['email']=$username;
        $_SESSION['password']=$password;
        header('Location: http://localhost/tour/user/user.php');
      }
      else{
        echo "<p style='color:red; text-align:center; margin:10px 0;' >Email ID And Password Not  Register.</p>";
      }
   }
?> 
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="imag/p12.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Login</span>
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" required />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>
              
                  <div class="pt-1 mb-4">
                    <input type="submit"  class="btn btn-dark btn-lg btn-block" value="Login" name="save" />
                  </div>

                  <a class="small text-muted" href="forgot.php">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="Registration.php"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>