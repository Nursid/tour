<?php
if(isset($_POST['submit'])){
  $con=mysqli_connect("localhost","root","","tour") or die("connection failed");
  $date=  date('Y-m-d',strtotime($_POST['date']));
  $tour=$_POST['tour'];
  $food=$_POST['food'];
  $total_price=$tour+$food;
  $sql="INSERT INTO `book`(`date`, `total_price`) VALUES ('$date','$total_price')";
  if(mysqli_query($con,$sql)){
  header('Location: http://localhost/tour/user/mybook.php');
  } else{
    echo "Query Failed.";
  }
}
?>