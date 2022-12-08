<?php   include ('navbar.php');
error_reporting(0);
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <div class="container">
<div class="card text-center" style="width: 300px;">
    <div class="card-header h5 text-white bg-primary">Password Reset</div>
    <div class="card-body px-5">
        <p class="card-text py-2">
            Enter your email address and we'll send you an email with instructions to reset your password.
        </p>
        <div class="form-outline">
            <input type="email" id="typeEmail" class="form-control my-3" name="email"/>
            <label class="form-label" for="typeEmail" >Email input</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100">Show Password</button>
    </div>
</div>
</div>
</form>
<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","root","","tour") or die("connection failed");
    $email=$_POST['email'];
    $sql="SELECT * FROM `registration` WHERE email ='$email'";
    $result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
 ?>
 <form action="reset_pass.php" method="post">
    <div class="container">
<div class="card text-center" style="width: 300px;">
    <div class="card-header h5 text-white bg-primary">Password Reset</div>
    <div class="card-body px-5">
        <div class="form-outline">
        <input type="hidden" id="typeEmail" class="form-control my-3" name="id" value="<?php echo $row['id']; ?>"/>
        <input type="hidden" id="typeEmail" class="form-control my-3" name="name" value="<?php echo $row['name']; ?>"/>
        <input type="hidden" id="typeEmail" class="form-control my-3" name="email" value="<?php echo $row['email']; ?>"/>
        <input type="hidden" id="typeEmail" class="form-control my-3" name="role" value="<?php echo $row['role']; ?>"/>
        <input type="hidden" id="typeEmail" class="form-control my-3" name="gender" value="<?php echo $row['gender']; ?>"/>
        <input type="hidden" id="typeEmail" class="form-control my-3" name="number" value="<?php echo $row['number']; ?>"/>
            <input type="password" id="typeEmail" class="form-control my-3" name="password"/>
            <label class="form-label" for="typeEmail" >New Password</label>
        </div>
        <div class="form-outline">
            <input type="password" id="typeEmail" class="form-control my-3"  name="re_password" />
            <label class="form-label" for="typeEmail">Repeat Password</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100">Reset password</button>
    </div>
</div>
</div>
</form>
 <?php
}
}
}
?>