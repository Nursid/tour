<?php
include('admin_nav.php')
?>
<h1 style="text-align: center;">View Destination </h1>
<?php
$con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$limit=3;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page=1;
}
$offset=($page-1) * $limit;
$sql="SELECT * FROM `destination` ORDER BY id ASC LIMIT {$offset},{$limit}";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
?>
<table class="table table-bordered border-primary center">
    <thead class="table-dark" style="text-align: center;">
      <tr>
      <th>ID</th>
      <th>Place</th>
      <th>Country</th>
      <th>Bus Price</th>
      <th>Train Price</th>
      <th>Flight Price</th>
      <th>Image1</th>
      <th>Food Price</th>
      <th>Number of Person</th>
      <th>Days</th>
      <th>Night</th>
      <th>Discription</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($rows=mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $rows['id'] ?></td>
      <td><?php echo $rows['place'] ?></td>
      <td><?php echo $rows['country'] ?></td>
      <td><?php echo $rows['bus_price'] ?></td>
      <td><?php echo $rows['train_price'] ?></td>
      <td><?php echo $rows['flight_price'] ?></td>
      <td>
        <img src="uploade/<?php echo $rows['image_1'] ?>" weidth="80px" height="60px" alt="image" >
      </td>
      <td><?php echo $rows['food_price'] ?></td>
      <td><?php echo $rows['number_of_person'] ?></td>
      <td><?php echo $rows['days'] ?></td>
      <td><?php echo $rows['night'] ?></td>
      <td><?php echo $rows['des'] ?></td>
      <td> 
          <a href="edit_des.php?id=<?php echo $rows['id']; ?>" class="btn btn-outline-primary" style="margin-bottom: 2px;" >Edit</a>
           <a href="delete_des.php?id=<?php echo $rows['id']; ?>" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
    </tbody>
    <?php } ?>
  </table>
  <?php
 $sql1="SELECT * FROM `destination`";
 $result1=mysqli_query($con,$sql1) or die("Query Failed.");
 if(mysqli_num_rows($result1) > 0){
     $total_record=mysqli_num_rows($result1);
    
     $total_page=ceil($total_record / $limit);
     echo "<ul class='pagination justify-content-center'>";
    if($page>1){
        echo '<li class="page-item "> <a class="page-link" href="viewdes.php?page='.($page - 1).'">Previous</a> </li>';
       }
     for($i=1; $i<=$total_page; $i++){
        if($i==$page){
            $active="active";
                 }
                 else{
           $active="";
                 }
        echo '<li class="page-item '.$active.'"><a class="page-link" href="viewdes.php?page='.$i.'">'.$i.'</a></li>';
     }
     if($total_page > $page){
        echo '<li class="page-item "> <a class="page-link" href="viewdes.php?page='.($page + 1).'">Next</a> </li>';
       }
     echo "</ul>";
 }
  ?>
<?php } else{
  echo "NO Record Found";
}
?>