<?php
	require_once "a.php";
  $showAlert = false; 
  $showError = false; 
  $exists=false;

  if($_SERVER["REQUEST_METHOD"] == "POST") {    
  require "database/connect.php";

  $email = $_POST["email"]; 
  $password = $_POST["password"]; 

  $sql = "Select * from user where email='$email'";
  $result = mysqli_query($conn, $sql);
    
  $num = mysqli_num_rows($result);
  //to prevent from mysqli injection  
  $email = mysqli_real_escape_string($conn, $email);  
  $password = mysqli_real_escape_string($conn, $password);  

  $sql = "SELECT * from user where email = '$email' and password = '$password'";  
  $result = mysqli_query($conn, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  
    
  if($count == 1){  
      echo "<h1><center> Login successful </center></h1>";  
      $sql2="UPDATE user SET last_seen=current_timestamp() where email='$email'";
      mysqli_query($conn,$sql2);
      $showAlert = true;
  }  
  else{  
    $showError = "Passwords or Username is Incorrect"; 
  }   
  if($num==0)
{
	$exists="email not available";
}  
}
?>  


<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="css/login.css">

    </head>
<body>
<?php if($showAlert) {
	
  echo ' <div class="alert alert-success
    alert-dismissible fade show" role="alert">

    <strong>Success!</strong> Your account is
    now created and you can login.
    <button type="button" class="close"
      data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div> ';
  header("Location: home.php");
  
}
if($showError) {
	
  echo ' <div class="alert alert-danger
    alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '. $showError.'

<button type="button" class="close"
    data-dismiss="alert aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div> ';
}
  
if($exists) {
  echo ' <div class="alert alert-danger
    alert-dismissible fade show" role="alert">

  <strong>Error!</strong> '. $exists.'
  <button type="button" class="close"
    data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div> ';
}


?>
<!-- partial:index.partial.html -->
<form method="POST" action="login.php">
  <input id="email" name="email" type="email" placeholder="Enter your Email!" required autofocus />
  <label for="email">
    <span class="label-text">Email</span>
    <span class="nav-dot"></span>
    <div class="signup-button-trigger">Login</div>
  </label>
  <input id="password" name="password" type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required />
  <label for="password">
    <span class="label-text">Password</span>
    <span class="nav-dot"></span>
  </label>
  <button type="submit">Login Into Your Account</button>
  <p class="tip">Press Tab</p>
  <div class="signup-button">Login</div>
</form>
<!-- partial -->

</body>
</html>