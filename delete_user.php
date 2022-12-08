<?php 
$stu_id=$_GET['id'];
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");

$sql="DELETE FROM `registration`WHERE id='$stu_id'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
header('Location: http://localhost/tour/Admin/allusers.php');
mysqli_close($con);
?>
