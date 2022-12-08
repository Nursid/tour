<?php
include "user_nav.php";
?>
<h1 style="text-align: center;">View Booking</h1>
<?php
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$sql="SELECT * FROM book";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
 if(mysqli_num_rows($result) > 0){
?>
<table class="table table-bordered border-primary center">
    <thead class="table-dark" style="text-align: center;">
      <tr>
      <th>ID</th>
      <!-- <th>Full Name</th>
      <th>Email Id</th>
      <th>Gender</th>
      <th>Mobile</th> -->
      <th>Total Price</th>
      <th>Booking Date</th>
    </tr>
    </thead>
    <tbody>
    <?php
      while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr>
       <td><?php echo $row['id']; ?></td>
       <td><?php echo $row['total_price']; ?></td>
       <td><?php echo $row['date']; ?></td>  
    </tr>
    <?php } ?>
    </tbody>
    <?php
 }?>
  </table>

      
      
    </tr>
    <?php //} ?>
    </tbody>
    <?php
 //}?>
  </table>
