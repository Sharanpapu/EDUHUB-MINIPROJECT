<?php
	require_once "a.php";
	//For Retrieval of Page data
	$sql = "SELECT * from page where id='1'";
	$result = $conn->query($sql);
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$title=$row["title"];
		}	
  
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <link rel="stylesheet" href="./css/index.css">
  <title><?php echo "$title";?></title>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="hero-section">	
		<div class="about-text hover-target">About</div>
		<div class="contact-text hover-target">Click Me!!!</div>
		<div class="section-center">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<h1>EDUHUB SAIRAM</h1>
					</div>
					<div class="col-12 text-center mb-2">
						<div class="dancing">THRIVE</div>
					</div>
					<div class="col-12 text-center mt-4 mt-lg-5">
						<p>
							<span class="travel hover-target">Mission </span> 
							<span class="wildlife hover-target">Team</span> 
							<span class="nature hover-target">Vision</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	<div class="about-section">	
		<div class="about-close hover-target"></div>
		<div class="section-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<img src="images/logo.png" alt="">
					</div>
					<div class="col-lg-8 text-center mt-4">
						<p>We Make What you Imagine and Work Beyond That </p><br>
						<h2><a href="about.php">Click me now, Thank me Later</a></h2>
					</div>
					<div class="col-12 text-center">
						<p><span>Eduhub</span></p>
					</div>
				</div>
			</div>
		</div>		
	</div>
	
	<div class="contact-section">	
		<div class="contact-close hover-target"></div>
		<div class="section-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<a href="./login.php" class="hover-target">Login</a> |  <a href="./signup.php" class="hover-target"> Signup</a>
					</div>
					<div class="col-12 text-center social mt-4">
						<a href="#" class="hover-target">Youtube</a>
						<a href="#" class="hover-target">Instagram</a>
						<a href="#" class="hover-target">Linkedin</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="travel-section">	
		<div class="travel-close hover-target"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<!--<h3>Mission</h3>-->
				</div>
				<div class="col-12 mt-3 text-center">
					<p><span>Build a Stronger and Developed Sairam Community</span></p>
				</div>
				<div class="col-12 text-center">
					<p>
						Say it Aloud<br>
						Develop and Express Skills<br>
						Make Teams and Build Projets<br>
						Share Knowledge and Get Mentors<br>
				
					</p>
					<p><span> OUR MISSION </span></p>
					<p> 

					   We focus on the student development by the integration of 
					   academic learning programs with larger issues of personal 
					   improvement and individual growth.Several services and programs 
					   are provided that assist the students towards their academic 
					   objectives by encouraging self direction and by promoting personal development.

					</p>
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/mission1.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/mission2.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/mission3.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/mission4.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/mission5.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	
	<div class="wildlife-section">	
		<div class="wildlife-close hover-target"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<!--<h3>Who We Are</h3>-->
				</div>
				<div class="col-12 mt-3 text-center">
					<p><span>Who We Are?</span></p>
				</div>
				<div class="col-12 text-center">
					<p>
						A student Like you<br>
						or student of, a professor like you<br>
						or will become an, Alumini Like you<br>
						And Finally ,
					</p>
					<p><span> OUR TEAM </span></p>
					<p>

					    "COMING TOGETHER IS A BEGINING.KEEPING TOGETHER IS PROGRESS<br>
						WORKING TOGETHER IS SUCCESS".<br>

						"THE STRENGTH OF THE TEAM IS EACH INDIVIDUAL MEMBER.<br>
						THE STRENGTH OF EACH MEMBER IS THE TEAM".

                    </p>
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/team1.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/team2.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/team3.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/team4.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/team5.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	
	<div class="nature-section">	
		<div class="nature-close hover-target"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<!--<h3>Vision</h3>-->
				</div>
				<div class="col-12 mt-3 text-center">
					<p><span>Experiencing the Future</span></p>
				</div>
				<div class="col-12 text-center">
					<p>
						A Tremendous platform which takes the major part in wonderful future of Students
					</p>
					<p><span> OUR VISION </span></p>
					<p>

					    Sri sairam engineering college aims at providing an effective
					    platform for the students to enhance their skills and achievements which 
					    would empower them to outdo challenges as active participants.
						
                    </p>
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/vision1.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/vision2.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/vision3.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/vision4.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-4">
					<img src="images/vision5.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	
	<div class='cursor' id="cursor"></div>
	<div class='cursor2' id="cursor2"></div>
	<div class='cursor3' id="cursor3"></div>

<!-- Link to page
================================================== -->

<!--<a href="" class="link-to-portfolio hover-target" target=”_blank”></a>-->
<!-- partial -->
  <script  src="./js/index.js"></script>

</body>
</html>
