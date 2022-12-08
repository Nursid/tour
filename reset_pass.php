<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","root","","tour") or die("connection failed");
    $id=$_POST['id'];
    $password=$_POST['password'];
    $re_pass=$_POST['re_password'];
    $sql="UPDATE `registration` SET `password`='$password',`re_password`='$re_pass' WHERE id='$id'";
    if(mysqli_query($con,$sql)){
        header('Location: http://localhost/tour/loging.php');
    }
    else{
        echo "Query Failed.";
    }
}
?>