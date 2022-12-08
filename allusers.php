<?php 
include('admin_nav.php')?>
<h2 style="text-align: center;">All User</h2>
<h3 style="float:right;"><a href="add_user.php" class="float-right btn btn-primary padding-bottom">Add user</a></h3>
<?php
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
 $limit=4;
 if(isset($_GET['page'])){
     $page=$_GET['page'];
 }
 else{
     $page=1;
 }
 $offset=($page-1) * $limit;
 $sql="SELECT * FROM `registration` ORDER BY id ASC LIMIT {$offset},{$limit}";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
?>
<table class="table table-bordered border-primary center">
    <thead class="table-dark">
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Mobile</th>
      <th>Gender</th>
      <th>Action</th>
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
      <td><?php echo $rows['role'] ?></td>
      <td><?php echo $rows['number'] ?></td>
      <td><?php echo $rows['gender'] ?></td>
      <td> 
       <a href="delete_user.php?id=<?php echo $rows['id'];?> " class="btn btn-outline-danger">Delete</a>
         <!-- <input type="submit" class="submit btn" value="Edit"> --> 
      </td>
    </tr>
    </tbody>
    <?php } ?>
  </table>
  <?php
 $sql1="SELECT * FROM `registration`";
 $result1=mysqli_query($con,$sql1) or die("Query Failed.");
 if(mysqli_num_rows($result1) > 0){
     $total_record=mysqli_num_rows($result1);
     $total_page=ceil($total_record / $limit);
     echo "<ul class='pagination justify-content-center'>";
     if($page>1){
      echo '<li class="page-item "> <a class="page-link" href="allusers.php?page='.($page - 1).'">Previous</a> </li>';
     }
     for($i=1; $i<=$total_page; $i++){
      if($i==$page){
 $active="active";
      }
      else{
$active="";
      }
        echo '<li class="page-item '.$active.'"><a class="page-link" href="allusers.php?page='.$i.'">'.$i.'</a></li>';
     }
     if($total_page > $page){
      echo '<li class="page-item "> <a class="page-link" href="allusers.php?page='.($page + 1).'">Next</a> </li>';
     }
     echo "</ul>";
 }
  ?>
<?php } else{
  echo "NO Record Found";
}
?>

<script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    </body>
</html>