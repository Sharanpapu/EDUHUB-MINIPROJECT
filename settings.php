<?php
    require "a.php";
	$email=$_SESSION['email'];

    	//For Retrieval of Page data

		if(isset($_POST['btnupdate']))
	{

		$up="UPDATE `user` set first_name='" . $_POST['first_name'] . "',last_name='" . $_POST['last_name']."',mobile='" . $_POST['mobile'] . "',dob='" . $_POST['dob'] . "',city='" . $_POST['city'] . "',dept='" . $_POST['dept'] . "',institution='" . $_POST['institution'] . "',title='" . $_POST['title'] . "',bio='" . $_POST['bio'] . "'  WHERE email='$email'";
		if ($conn->query($up) === TRUE) {
			echo "Record updated successfully";
		  } else {
			echo "Error updating record: " . $conn->error;
		  }

	}
	$sql = "SELECT * from page where id='5'";
	$result = $conn->query($sql);
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$title=$row["title"];
		}
		if(!(isset($_SESSION['email'])))
		{
		 header('location:login.php');
		}
	$query="SELECT * FROM `user` where email='$email'";
	$userdata=$conn->query($query);
	$out=$userdata->fetch_assoc()
    

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo "$title";?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="css/settings.css">
	<link rel="stylesheet" type="text/scss" href="css/settings.scss">


	


</head>
<body>
<div id="header"></div>

	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5"></h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src=".jpg" alt="Image" class="shadow">
						</div>
						<h4 class="text-center"></h4><?php echo $out['first_name'];?></h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							
							Profile
							
						</a>
						  <a class="nav-link" id="skills-tab" data-toggle="pill" href="#skills" role="tab" aria-controls="skills" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							skills
						</a>
						<a class="nav-link" id="certification-tab" data-toggle="pill" href="#certification" role="tab" aria-controls="certification" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							certifications
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Conference
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
						Projects
						</a>


						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Privacy and Security
						</a>
					
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-adjust text-center mr-1"></i> 
							Appearance
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i> 
							Notification
						</a>
                        <a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class=" fa fa-book"></i>
							Current Project
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class=" fa fa-comments-o"></i>
							Communication
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class=" fa fa-bullhorn"></i>
							Post
							
						</a>
					</div>
				</div>
<!----Profile Section--->
			<form  method="POST" action="settings.php">
			<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Profile</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>First Name</label>
								  	<input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo $out['first_name'];?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Last Name</label>
								  	<input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $out['last_name'];?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" id="email" name="email"class="form-control" value="<?php echo $out['email'];?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Mobile Number</label>
								  	<input type="text" id="mobile" name="mobile" class="form-control" value="<?php echo $out['mobile'];?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Company/Institution</label>
								  	<input type="text" id="institution" name="institution" class="form-control" value="<?php echo $out['institution'];?>">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
								  	<label>Department</label>
								  	<input type="text" id="dept" name="dept" class="form-control" value="<?php echo $out['dept'];?>">
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
								  	<label>Designation</label>
								  	<input type="text" id="title" name="title" class="form-control" value="<?php echo $out['title'];?>">
								</div>
							</div>

                            <div class="col-md-6">
								<div class="form-group">
								  	<label>City</label>
								  	<input type="text" id="city" name="city" class="form-control" value="<?php echo $out['city'];?>">
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
									<label for="birthday">DOB(dd/mm/yy)</label><br><br>
									<input type="date" id="dob" name="dob" value="<?php echo $out['dob'];?>">
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
									<label>Gender</label><br>
									<input type="radio" id="male" name="gender" value="<?php echo $out['dob'];?>">
									<label for="male">Male</label><br>
									<input type="radio" id="female" name="gender" value="<?php echo $out['dob'];?>">
									<label for="female">Female</label><br>
									<input type="radio" id="other" name="gender" value="<?php echo $out['dob'];?>">
									<label for="other">Other</label>
								</div>
							</div>


							<div class="col-md-12">
								<div class="form-group">
								  	<label>Bio</label>
								  	<input type="text" id="bio" name="bio" class="form-control" value="<?php echo $out['bio'];?>">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" name="btnupdate">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Security Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Login</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Two-factor auth</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="recovery">
										<label class="form-check-label" for="recovery">
										Recovery
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" name="btn-update">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Theme and Display</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="app-check">
										<label class="form-check-label" for="app-check">
										Dark
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
										<label class="form-check-label" for="defaultCheck2">
										Light
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Email notification preferences</h3>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification1">
								<label class="form-check-label" for="notification1">
									send daily updates.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification2" >
								<label class="form-check-label" for="notification2">
									Use quieter messaging (blocks notification prompts from interrupting you).
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification3" >
								<label class="form-check-label" for="notification3">
									disable all notifications.
								</label>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
				</div>
			</form>

			</div>
		</div>
	</section>
	<div id="footer"></div>

	<script>
        $(function(){
    $("#header").load("includes/navigation.html"); 
    $("#footer").load("includes/footer.html");
    }); 
    </script>   

</body>
</html>