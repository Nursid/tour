<?php
    include "user_nav.php";
if(isset($_POST['save'])){
    $user_name=$_POST['name'];
	 $user_email=$_POST['email'];
	 $user_feedback=$_POST['feedback'];
	 $user_message=$_POST['message'];
     $con=mysqli_connect("localhost","root","","tour") or die("connection failed");
$sql="INSERT INTO `contact`(`name`, `email`, `feedback`, `message`) VALUES ('$user_name','$user_email','$user_feedback','$user_message')";
if(mysqli_query($con,$sql)){
 header('Location: http://localhost/tour/user/user.php');
}
else{
    echo "Query unsuccessfull.";
}
 mysqli_close($con);
}
?> 

<!-- Default form contact -->
<form class="text-center border border-light p-5" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

    <p class="h4 mb-4">Contact us</p>

    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" name="name">

    <!-- Email -->
    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

    <!-- Subject -->
    <label>Subject</label>
    <select class="browser-default custom-select mb-4" name="feedback">
        <option value="" disabled>Choose option</option>
        <option value="Feedback" selected>Feedback</option>
        <option value="Report a bug">Report a bug</option>
        <option value="Feature request">Feature request</option>
        <option value="Feature request">Feature request</option>
    </select>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message" name="message"></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit" name="save">Send</button>

</form>
<!-- Default form contact -->