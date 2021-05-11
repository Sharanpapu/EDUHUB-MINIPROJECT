<?php
    require "a.php";
	$email=$_SESSION['email'];

    	//For Retrieval of Page data
	//for profile updation
		if(isset($_POST['profileupdate']))
	{

		$pup="UPDATE `user` set first_name='" . $_POST['first_name'] . "',last_name='" . $_POST['last_name']."',mobile='" . $_POST['mobile'] . "',dob='" . $_POST['dob'] . "',city='" . $_POST['city'] . "',dept='" . $_POST['dept'] . "',institution='" . $_POST['institution'] . "',title='" . $_POST['title'] . "',bio='" . $_POST['bio'] . "'  WHERE email='$email'";
		if ($conn->query($pup) === TRUE) {
			echo "Record updated successfully";
		  } else {
			echo "Error updating record: " . $conn->error;
		  }}
	//for password updation
	if(isset($_POST['passwordupdate']))
	{

		$paup="UPDATE `user` set password='" . $_POST['npassword'] . "',recovery='" . $_POST['recovery'] . "' WHERE email='$email'";
		if ($conn->query($paup) === TRUE) {
			echo "Record updated successfully";
		  } else {
			echo "Error updating record: " . $conn->error;
		  }}
	// for featured updation
	if(isset($_POST['featuredupdate']))
	{

		$fup="UPDATE `user` set featured1='" . $_POST['featured1'] . "',featured2='" . $_POST['featured2'] . "',featured3='" . $_POST['featured3'] . "',featured4='" . $_POST['featured4'] . "',featured5='" . $_POST['featured5'] . "' WHERE email='$email'";
		if ($conn->query($fup) === TRUE) {
			echo "Record updated successfully";
		  } else {
			echo "Error updating record: " . $conn->error;
		  }}
	//for skill updation
	if(isset($_POST['skillupdate']))
	{

		$sup="UPDATE `user` set skill1='" . $_POST['skill1'] . "',skill2='" . $_POST['skill2'] . "',skill3='" . $_POST['skill3'] . "' WHERE email='$email'";
		if ($conn->query($sup) === TRUE) {
			echo "Record updated successfully";
		  } else {
			echo "Error updating record: " . $conn->error;
		  }}
	//for Communication updation
	if(isset($_POST['commupdate']))
	{

		$cup="UPDATE `user` set github='" . $_POST['github'] . "',linkedin='" . $_POST['linkedin'] . "',edumate='" . $_POST['edumate'] . "',website='" . $_POST['website'] . "' WHERE email='$email'";
		if ($conn->query($cup) === TRUE) {
			echo "Record updated successfully";
		  } else {
			echo "Error updating record: " . $conn->error;
		  }}
	//pagedata fetching
	$sql = "SELECT * from page where id='5'";
	$result = $conn->query($sql);
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$title=$row["title"];
		}
	//logged in or not checking
		if(!(isset($_SESSION['email'])))
		{
		 header('location:login.php');
		}
	//userdata fetching 
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
<div class="container">
  <nav class="nav">
    <ul>
      <li class="nav__item active"><a href="#">nav01</a></li>
      <li class="nav__item"><a href="#">nav02</a></li>
      <li class="nav__item"><a href="#">nav03</a></li>
    </ul>
  </nav>
  
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
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true"><i class="fa fa-home text-center mr-1"></i> Profile</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false"><i class="fa fa-key text-center mr-1"></i>Privacy and Security</a>
						<a class="nav-link" id="featured-tab" data-toggle="pill" href="#featured" role="tab" aria-controls="featured" aria-selected="false"><i class="fa fa-key text-center mr-1"></i>Featured</a>
						<a class="nav-link" id="skill-tab" data-toggle="pill" href="#skill" role="tab" aria-controls="skills" aria-selected="false"><i class="fa fa-certificate" aria-hidden="true"></i>skills</a>
						<a class="nav-link" id="certification-tab" data-toggle="pill" href="#certification" role="tab" aria-controls="certification" aria-selected="false"><i class="fa fa-graduation-cap" aria-hidden="true"></i>certifications</a>
						<a class="nav-link" id="project-tab" data-toggle="pill" href="#project" role="tab" aria-controls="project" aria-selected="false"><i class="fa fa-briefcase" aria-hidden="true"></i>Projects</a>
						<a class="nav-link" id="accomplishment-tab" data-toggle="pill" href="#accomplishment" role="tab" aria-controls="accomplishment" aria-selected="false"><i class="fa fa-bookmark" aria-hidden="true"></i>Accomplishments </a>
						<a class="nav-link" id="appearance-tab" data-toggle="pill" href="#appearance" role="tab" aria-controls="appearance" aria-selected="false"><i class="fa fa-adjust text-center mr-1"></i> Appearance</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false"><i class="fa fa-bell text-center mr-1"></i> Notification</a>
                        <a class="nav-link" id="cproject-tab" data-toggle="pill" href="#cproject" role="tab" aria-controls="cproject" aria-selected="false"><i class=" fa fa-play"></i>Current Project</a>
						<a class="nav-link" id="communication-tab" data-toggle="pill" href="#communication" role="tab" aria-controls="communication" aria-selected="false"><i class="fa fa-address-book" aria-hidden="true"></i>Communication</a>
						<a class="nav-link" id="post-tab" data-toggle="pill" href="#post" role="tab" aria-controls="post" aria-selected="false"><i class=" fa fa-bullhorn"></i>Post</a>
					</div>
				</div>
				<form  method="POST" action="settings.php">
					<div class="tab-content p-4 p-md-7" id="v-pills-tabContent">
						<!----Profile Section--->
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
								<button class="btn btn-primary" name="profileupdate">Update</button>
								<button class="btn btn-light">Cancel</button>
							</div>
						</div>
						<!----------Password Section------------>
						<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
							<h3 class="mb-4">Password Settings</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Old password</label>
										<input type="password" name="password" class="form-control" value="<?php echo $out['password'];?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>New password</label>
										<input type="password" name="npassword" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Confirm new password</label>
										<input type="password" name="namepassword" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Recovery</label>
										<input type="text" class="form-control" name="recovery" value="<?php echo $out['recovery'];?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="two-fact-auth" value="<?php echo $out['two-fact-auth'];?>" id="two-fact-auth">
											<label class="form-check-label" for="two-fact-auth">
											Two Factor Authentication
											</label>
										</div>
									</div>
								</div>
							</div>
							<div>
								<button class="btn btn-primary" name="passwordupdate">Update</button>
								<button class="btn btn-light">Cancel</button>
							</div>
						</div>
						<!---------Featured Section-------------->
						<div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
							<h3 class="mb-4">Featured</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Featured I</label>
											<input type="text" id="featured1" name="featured1" class="form-control" value="<?php echo $out['featured1'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Featured II</label>
											<input type="text" id="featured2" name="featured2" class="form-control" value="<?php echo $out['featured2'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Featured III</label>
											<input type="text" id="featured3" name="featured3" class="form-control" value="<?php echo $out['featured3'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Featured IV</label>
											<input type="text" id="featured4" name="featured4" class="form-control" value="<?php echo $out['featured4'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Featured V</label>
											<input type="text" id="featured5" name="featured5" class="form-control" value="<?php echo $out['featured5'];?>">
									</div>
								</div>
							</div>
							<div>
								<button class="btn btn-primary" name="featuredupdate">Update</button>
								<button class="btn btn-light">Cancel</button>
							</div>
						</div>
						<!--------Skill Section------>
						<div class="tab-pane fade" id="skill" role="tabpanel" aria-labelledby="skill-tab">
							<h3 class="mb-4">Skillset</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Personal Skills</label>
											<input type="text" id="skill1" name="skill1" class="form-control" value="<?php echo $out['skill1'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Technical Skills</label>
											<input type="text" id="skill2" name="skill2" class="form-control" value="<?php echo $out['skill2'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Miscellaneous Skills</label>
											<input type="text" id="skill3" name="skill3" class="form-control" value="<?php echo $out['skill3'];?>">
									</div>
								</div>
							</div>
							<div>
								<button class="btn btn-primary" name="skillupdate">Update</button>
								<button class="btn btn-light">Cancel</button>
							</div>
						</div>
						<!-----------------Theme section---------------------->
						<div class="tab-pane fade" id="appearance" role="tabpanel" aria-labelledby="appearance-tab">
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
						<!-----------------Notification Settings-------------->
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
						<!------------------Communication Settings------------->
						<div class="tab-pane fade" id="communication" role="tabpanel" aria-labelledby="communication-tab">
							<h3 class="mb-4">Communication</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Github url</label>
											<input type="text" id="github" name="github" class="form-control" value="<?php echo $out['github'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Linkedin url</label>
											<input type="text" id="linkedin" name="linkedin" class="form-control" value="<?php echo $out['linkedin'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Edumate url</label>
											<input type="text" id="edumate" name="edumate" class="form-control" value="<?php echo $out['edumate'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Website url</label>
											<input type="text" id="website" name="website" class="form-control" value="<?php echo $out['website'];?>">
									</div>
								</div>
							</div>
							<div>
								<button class="btn btn-primary" name="commupdate">Update</button>
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