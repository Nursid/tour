<?php
$pass=$_GET['pass'];
include('user_nav.php');
if(isset($_POST['submit'])){
    $password=$_POST['password'];
    $re_password=$_POST['re_password'];
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$sql="UPDATE `registration` SET `password`='$password',`re_password`='$re_password' WHERE password='$pass'";
if(mysqli_query($con,$sql)){
    header('Location: http://localhost/tour/user/user.php');
}
else{
    echo "Query Failed.";
}
}
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<div class="card text-center" style="width: 300px;">
    <div class="card-header h5 text-white bg-primary">Password Reset</div>
    <div class="card-body px-5">
     
        <div class="form-outline">
            <input type="password" id="typeEmail" class="form-control my-3" value=<?php echo $pass; ?> />
            
            <label class="form-label" for="typeEmail">old password</label>
            <i class="bi bi-eye-slash" id="togglePassword"></i>
        </div>
        <div class="form-outline">
            <input type="password" id="typeEmail" class="form-control my-3" name="password" />
            <label class="form-label" for="typeEmail">New password</label>
        </div>
        <div class="form-outline">
            <input type="password" id="typeEmail" class="form-control my-3" name="re_password" />
            <label class="form-label" for="typeEmail">Repeat password</label>
        </div>
        <button class="btn btn-primary w-100" type="submit" name="submit">Reset password</button>
    </div>
</div>
</form>
<script type="text/javascript" src="../Admin/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>