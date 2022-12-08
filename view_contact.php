<?php
include('admin_nav.php')
?>
<h1 style="text-align: center;">View contact</h1>
<?php
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
 $sql="SELECT * FROM `contact` ORDER BY id ASC";

$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
?>
<table class="table table-bordered border-primary center">
    <thead class="table-dark">
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Feedback</th>
      <th>Message</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($rows=mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $rows['id'] ?></td>
      <td><?php echo $rows['name'] ?></td>
      <td><?php echo $rows['email'] ?></td>
      <td><?php echo $rows['feedback'] ?></td>
      <td><?php echo $rows['message'] ?></td>
    </tr>
    </tbody>
    <?php } ?>
  </table>
<?php } else{
  echo "NO Record Found";
}
?>
</body>
</html>
