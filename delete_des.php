<?php 
$des_id=$_GET['id'];
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");

$sql="DELETE FROM `destination`WHERE id='$des_id'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
header('Location: http://localhost/tour/Admin/viewdes.php');
mysqli_close($con);
?>
