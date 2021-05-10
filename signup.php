<?php
	require_once "a.php";
  	//For Retrieval of Page data
	$sql = "SELECT * from page where id='8'";
	$result = $conn->query($sql);
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$title=$row["title"];
		}	
    // Checking whether logged in
    if(isset($_SESSION['email']))
    {
     header('location:home.php');
    }
$showAlert = false; 
$showError = false; 
$exists=false;
if($_SERVER["REQUEST_METHOD"] == "POST") {    
    // Include file which makes the
    // Database Connection.
    require "database/connect.php";
    
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $first_name=$_POST["firstname"];
    $last_name=$_POST["lastname"];
    $cpassword = $_POST["cpassword"];
            
    // cheking of whether email is there before
    $sql = "Select * from user where email='$email'";
	
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);
    if($num == 0) {
      if(($password == $cpassword) && $exists==false) {
    
        $hash = password_hash($password,
                  PASSWORD_DEFAULT);
          
        // Password Hashing is used here.
        $sql = "INSERT INTO `user` (`email`,`password`,`first_name`,`last_name`, `last_seen`) VALUES ('$email', 
        '$password','$first_name','$last_name', current_timestamp())";

        $result = mysqli_query($conn, $sql);

        if ($result) {
          $showAlert = true;
        }
      }
      else {
        $showError = "Passwords do not match";
      }	
    }
    if($num>0)
{
	$exists="email not available";
}
}
  ?>
   
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="css/signup.css">
    <title><?php echo "$title";?></title>
    </head>
<body>
<?php
	
	if($showAlert) {
	
		echo ' <div class="alert alert-success
			alert-dismissible fade show" role="alert">
	
			<strong>Success!</strong> Your account is
			now created and you can login.
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> ';
    header("Location:login.php");
    
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
<form action="signup.php" method="post">
  <input id="firstname"  name="firstname" type="text" placeholder="First Name" required autofocus />
  <label for="firstname">
    <span class="label-text">First Name</span>
    <span class="nav-dot"></span>
    <div class="signup-button-trigger">Sign Up</div>
  </label>
  <input id="lastname" name="lastname" type="text" placeholder="Last Name" required />
  <label for="lastname">
    <span class="label-text">Last name</span>
    <span class="nav-dot"></span>
  </label>
  <input id="email" type="text" name="email"  placeholder="email@address.com" required aria-describedby="emailHelp"/>
  <label for="email">
    <span class="label-text">Email</span>
    <span class="nav-dot"></span>
  </label>
  <input id="password" type="password"  name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required />
  <label for="password">
    <span class="label-text">Password</span>
    <span class="nav-dot"></span>
  </label>
  <input id="cpassword" type="password"  name="cpassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required />
  <label for="cpassword">
    <span class="label-text">Confirm Password</span>
    <span class="nav-dot"></span>
  </label>
  <button type="submit" class="btn">Create Your Account</button>
  <p class="tip">Press Tab</p>
  <div class="signup-button">Sign Up</div>
</form>

</body>

</html>