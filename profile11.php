<?php
    require "a.php";
	$email=$_SESSION['email'];

    	//For Retrieval of Page data
	$sql = "SELECT * from page where id='3'";
	$result = $conn->query($sql);
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$title=$row["title"];
		}
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>

<body>
    <div id="header"></div>
    <h1><br><br></h1>
    <div class="container">
        <div class="page">
            <div class="upper-quarter">
                <div class="content">
                    <div class="contact-me">
                        <div class="me">
                            <img class="logo" src="https://i.imgur.com/2e6ts94.png">
                            <div class='name'>
                                <h1><?php echo $out['first_name'];?></h1>
                                <h3> <?php echo $out['title'];?></h3>
                            </div>
                        </div>
                        <div class="contact">
                            <h3 class="email"><?php echo $out['email'];?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-three-quarters">
                <div class="left-column">
                    <div class="experience">
                        <h2>Featured</h2>
                        <!-- bold -->
                        <ul>
                            <li>
                                <h4><?php echo $out['featured1'];?></h4>
                            </li>
                            <li>
                                <h4><?php echo $out['featured2'];?></h4>
                            </li>
                            <li>
                                <h4><?php echo $out['featured3'];?></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="personal-experience">
                        <h2>Personal Experience</h2>
                        <div class="waya">
                            <img class="waya-logo" src="https://i.imgur.com/Vdzz2UG.png">
                            <div class="waya-text">
                                <h3>WAYA: Hardwood Headphone Wrapper</h3>
                                <a href="http://kck.st/1yFQBO9" target="blank">http://kck.st/1yFQBO9</a>
                            </div>
                        </div>
                        <div class="fpgc">
                            <img class="fpgc-logo" src="https://i.imgur.com/cKYjhSw.png">
                            <div class="fpgc-text">
                                <h3>Frying Pans & Garbage Cans</h3>
                                <a href="http://kck.st/1oQnWpv" target="blank">http://kck.st/1oQnWpv</a>
                            </div>
                        </div>
                    </div>
                    <div class="experience">
                        <h2>Communication & Social Profiles</h2>
                        <!-- bold -->
                        <ul>
                            <li>
                                <h3><?php echo $out['github'];?></h3>
                            </li>
                            <li>
                                <h3><?php echo $out['linkedin'];?></h3>
                            </li>
                            <li>
                                <h3><?php echo $out['edumate'];?></h3>
                            </li>
                            <li>
                                <h3><?php echo $out['website'];?></h3>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="right-column">
                    <div class="education">
                        <h2>Education</h2>
                        <div class="ed-info">
                            <img src="images/logo-sairam.png">
                            <div class="info">
                                <h2><?php echo $out['dept'];?></h2>
                                <h3><?php echo $out['institution'];?></h3>
                                <h4>(Affiliated to Anna University)<br>
                                    <?php echo $out['city'];?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="skills">
                        <h2>Skills</h2>
                        <div class="skill-lists">
                            <h3>Technical Skills:</h3>
                            <li><?php echo $out['skill1'];?></li>
                            <h3>Personal Skills</h3>
                            <li><?php echo $out['skill2'];?></li>
                            <h3>Miscellaneous Skills</h3>
                            <li><?php echo $out['skill3'];?></li>

                            <ul class="left">
                            </ul>
                            <ul class="right">
                            </ul>
                        </div>
                    </div>
                    <div class="traits-hobbies">
                        <h2>Projects</h2>
                        <li><?php echo $out['project1'];?></li>
                        <div class="traits-list">
                            <ul class="left-traits">
                            </ul>
                            <ul class="center-traits">
                            </ul>
                            <ul class="right-traits">
                            </ul>
                        </div>
                        <div class="hobbies">
                            <h2>Conferences</h2>
                            <li><?php echo $out['project2'];?></li>
                            <div class="hobbies-list">
                                <ul class="left-hobbies">
                                </ul>
                                <ul class="center-hobbies">
                                </ul>
                                <ul class="right-hobbies">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="Awards">
                        <h2>Awards & Accomplishments</h2>
                        <div class="crocker">
                            <div class="crocker-text">
                                <h3><?php echo $out['accomplishment1'];?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        $(function() {
            $("#header").load("includes/navigation.html");
            $("#footer").load("includes/footer.html");
        });
        </script>


        <!-- partial -->
        <script src="./script.js"></script>

</body>

</html>