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
        //if user is signed in or not check
        if(!(isset($_SESSION['email'])))
    {
     header('location:login.php');
    }
	//userdata fetching 
	$query="SELECT * FROM `user` where email='$email'";
	$userdata=$conn->query($query);
	$out=$userdata->fetch_assoc();
    
    //skilldata fetching
	$ts_query = "SELECT * from `skill` where skill_owner='$email' AND skill_type='technical'";
	$ts_data=$conn->query($ts_query);
    
	$ps_query = "SELECT * from `skill` where skill_owner='$email' AND skill_type='personal'";
	$ps_data=$conn->query($ps_query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo "$title";?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/includes/project.css">
    <link rel="stylesheet" type="text/css" href="css/includes/profilepic.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>

</head>

<body>
    <div id="header"></div>
    <!----About Section---->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <h1>Here is the Profile!!</h1>
                </center>
            </div>

            <!--profile pic card -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <article class="material-card Red">
                    <h2>
                        <span><?php echo $out['first_name'];?></span>
                        <strong>
                            <i class="fa fa-fw fa-star"></i>
                            <?php echo $out['title'];?>
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="img-responsive" src="uploads/profile_image/<?=$out['profile_image']?>">
                        </div>
                        <div class="mc-description">
                            From : <?php echo $out['dept'];?><br>
                            <?php echo $out['institution'];?><br>
                            <?php echo $out['city'];?>

                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer">
                        <h4>
                            <span>
                                Connect with :)
                            </span>
                        </h4>
                        <a class="fa fa-fw fa-linkedin" href="<?php echo $out['linkedin'];?>"></a>
                        <a class="fa fa-fw fa-github" href="<?php echo $out['github'];?>"></a>
                        <a class="fa fa-fw fa-google-plus" href="<?php echo $out['website'];?>"></a>
                        <a class="fa fa-fw fa-envelope"
                            href="mailto:<?php echo $out[''];?>?subject=Feedback&body=Message"></a>
                    </div>
                </article>
            </div>
            <!--end of profile pic-->

            <!----About section---->
            <div class="col-lg-8">
                <div class="card_about card_about1">
                    <p>
                        <?php echo $out['bio'];?>

                        A team of Engineers & Professionals joined to support SaiRam Students, Selective alumni
                        and
                        Venture to
                        craft
                        their quest towards Entrepreneurship by providing an Innovative Ecosystem. This indeed
                        will
                        develop them
                        <strong> into Complete Engineers and Responsible Entrepreneurs.</strong> So, join us to
                        learn,
                        explore,
                        and
                        expand a community of <strong> entrepreneurs, problem solvers, and Remarkable
                            leaders.</strong>
                        we will
                        support you get there further, faster.
                    </p>
                </div>
            </div>
            <!---- end of About section---->

            <div class="col-lg-12">
                <center>
                    <h1>Featured</h1>
                </center>
            </div>
            <!---Featured Block---->
            <div class="col-lg-4">
                <div class="scard">
                    <div class="face face1">
                        <div class="content">
                            <img
                                src="https://images.pexels.com/photos/262438/pexels-photo-262438.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                            <h3>Featured Skills</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>
                                <?php echo $out['featured1'];?><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="scard">
                    <div class="face face1">
                        <div class="content">
                            <img
                                src="https://images.pexels.com/photos/937481/pexels-photo-937481.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                            <h3>Featured Experience</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>
                                <?php echo $out['featured2'];?><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="scard">
                    <div class="face face1">
                        <div class="content">
                            <img
                                src="https://images.pexels.com/photos/2292837/pexels-photo-2292837.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                            <h3>Featured Achievement</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>
                                <?php echo $out['featured3'];?><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of featured block--->

            <!-----all skills--------->
            <div class="col-lg-6">
                <div class="card_about card_about2">
                    <h3>
                        Technical Skills
                    </h3>

                    <?php while($row=$ts_data->fetch_assoc())    { ?>
                    <p><?php echo $row['skill_name'];?></p>
                    <?php } ?>
                    <h3>
                        Personality Skills
                    </h3>

                    <?php while($row=$ps_data->fetch_assoc())    { ?>
                    <p>
                        <?php echo $row['skill_name'];?>
                    </p>
                    <?php } ?>
                    <h3>Miscellaneous Skills</h3>
                    <p> <span><?php echo $out['skill3'];?></span>
                    </p>
                </div>
            </div>
            <!-----all certifications--------->

            <div class="col-lg-6">
                <div class="card_about card_about2">
                    <p>
                        A team of Engineers & Professionals joined to support SaiRam Students, Selective alumni
                        and
                        Venture to
                        craft
                        their quest towards Entrepreneurship by providing an Innovative Ecosystem. This indeed
                        will
                        develop them
                        <strong> into Complete Engineers and Responsible Entrepreneurs.</strong> So, join us to
                        learn,
                        explore,
                        and
                        expand a community of <strong> entrepreneurs, problem solvers, and Remarkable
                            leaders.</strong>
                        we will
                        support you get there further, faster.
                    </p>
                </div>
            </div>
            <!-----all conferences and competitions--------->

            <div class="col-lg-6">
                <div class="card_about card_about2">
                    <p>
                        A team of Engineers & Professionals joined to support SaiRam Students, Selective alumni
                        and
                        Venture to
                        craft
                        their quest towards Entrepreneurship by providing an Innovative Ecosystem. This indeed
                        will
                        develop them
                        <strong> into Complete Engineers and Responsible Entrepreneurs.</strong> So, join us to
                        learn,
                        explore,
                        and
                        expand a community of <strong> entrepreneurs, problem solvers, and Remarkable
                            leaders.</strong>
                        we will
                        support you get there further, faster.
                    </p>
                </div>
            </div>
            <!-----awards and achievements--------->

            <div class="col-lg-6">
                <div class="card_about card_about2">
                    <p>
                        A team of Engineers & Professionals joined to support SaiRam Students, Selective alumni
                        and
                        Venture to
                        craft
                        their quest towards Entrepreneurship by providing an Innovative Ecosystem. This indeed
                        will
                        develop them
                        <strong> into Complete Engineers and Responsible Entrepreneurs.</strong> So, join us to
                        learn,
                        explore,
                        and
                        expand a community of <strong> entrepreneurs, problem solvers, and Remarkable
                            leaders.</strong>
                        we will
                        support you get there further, faster.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <center>
                <h1>Projects</h1>
            </center>
        </div>

        <!----projects------->
        <section id="portfolio">
            <div id="top"></div>
            <div class="gallery">
                <div class="row">
                    <ul>
                        <a href="#" class="close"></a>
                        <li>
                            <a class="image" href="#item01">
                                <img class="project_image"
                                    src="https://images.unsplash.com/photo-1586038119444-4b22a8575e08?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGNhciUyMHNlbnNvcnN8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                                    alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="#item02">
                                <img class="project_image"
                                    src="https://images.unsplash.com/photo-1569504275728-9350b4c55fee?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGluY3ViYXRvcnxlbnwwfDB8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                                    alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="#item03">
                                <img class="project_image"
                                    src="https://images.unsplash.com/photo-1507724571015-2a7d95884528?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGRyb25lfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60"
                                    alt="">
                            </a>
                        </li>
                    </ul>
                </div> <!-- / row -->

                <!-- Item 01 -->
                <div id="item01" class="port">

                    <div class="row">
                        <div class="description">
                            <h1>Autonomous Vehicle</h1>
                            <p>An autonomous vehicle, or a driverless vehicle, is one that is able to operate itself
                                and perform
                                necessary functions without any human intervention, through ability to sense its
                                surroundings.
                                An autonomous vehicle utilises a fully automated driving system in order to allow
                                the vehicle to respond
                                to external conditions that a human driver would manage.</p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1586038119444-4b22a8575e08?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGNhciUyMHNlbnNvcnN8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                            alt="">
                    </div>
                </div> <!-- / row -->
                <!-- Item 02 -->
                <div id="item02" class="port">
                    <div class="row">
                        <div class="description">
                            <h1>Automated Incubator with IOT Control</h1>
                            <p>An incubator is a device simulating avian incubation by keeping eggs warm at a
                                particular temperature
                                range
                                and in the correct humidity with a turning mechanism to hatch them.
                                The common names of the incubator in other terms include breeding / hatching
                                machines or hatchers,
                                setters,
                                and egg breeding / equipment</p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1569504275728-9350b4c55fee?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGluY3ViYXRvcnxlbnwwfDB8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                            alt="">
                    </div> <!-- / row -->
                </div> <!-- / Item 02 -->
                <!-- Item 03 -->
                <div id="item03" class="port">
                    <div class="row">
                        <div class="description">
                            <h1>Automated Surveilance Drone</h1>
                            <p>Some drones are controlled manually through hand-held devices. These usually have a
                                video camera
                                attached to them, not just for surveillance, but for the operator to view through
                                the camera to control
                                the drone. ... Civil agencies often use drones to survey land and monitor animal
                                populations.</p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1507724571015-2a7d95884528?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGRyb25lfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60"
                            alt="">
                    </div> <!-- / row -->
                </div> <!-- / Item 03 -->
            </div>
        </section>
        <div class="col-lg-12">
            <center>
                <h1>Posts</h1>
            </center>
        </div>

        <!----posts------->
        <section id="portfolio">
            <div id="top"></div>
            <div class="gallery">
                <div class="row">
                    <ul>
                        <a href="#" class="close"></a>
                        <li>
                            <a class="image" href="#item01">
                                <img class="project_image"
                                    src="https://images.unsplash.com/photo-1586038119444-4b22a8575e08?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGNhciUyMHNlbnNvcnN8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                                    alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="#item02">
                                <img class="project_image"
                                    src="https://images.unsplash.com/photo-1569504275728-9350b4c55fee?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGluY3ViYXRvcnxlbnwwfDB8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                                    alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="#item03">
                                <img class="project_image"
                                    src="https://images.unsplash.com/photo-1507724571015-2a7d95884528?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGRyb25lfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60"
                                    alt="">
                            </a>
                        </li>
                    </ul>
                </div> <!-- / row -->

                <!-- Item 01 -->
                <div id="item01" class="port">

                    <div class="row">
                        <div class="description">
                            <h1>Autonomous Vehicle</h1>
                            <p>An autonomous vehicle, or a driverless vehicle, is one that is able to operate itself
                                and perform
                                necessary functions without any human intervention, through ability to sense its
                                surroundings.
                                An autonomous vehicle utilises a fully automated driving system in order to allow
                                the vehicle to respond
                                to external conditions that a human driver would manage.</p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1586038119444-4b22a8575e08?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGNhciUyMHNlbnNvcnN8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                            alt="">
                    </div>
                </div> <!-- / row -->
                <!-- Item 02 -->
                <div id="item02" class="port">
                    <div class="row">
                        <div class="description">
                            <h1>Automated Incubator with IOT Control</h1>
                            <p>An incubator is a device simulating avian incubation by keeping eggs warm at a
                                particular temperature
                                range
                                and in the correct humidity with a turning mechanism to hatch them.
                                The common names of the incubator in other terms include breeding / hatching
                                machines or hatchers,
                                setters,
                                and egg breeding / equipment</p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1569504275728-9350b4c55fee?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGluY3ViYXRvcnxlbnwwfDB8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                            alt="">
                    </div> <!-- / row -->
                </div> <!-- / Item 02 -->
                <!-- Item 03 -->
                <div id="item03" class="port">
                    <div class="row">
                        <div class="description">
                            <h1>Automated Surveilance Drone</h1>
                            <p>Some drones are controlled manually through hand-held devices. These usually have a
                                video camera
                                attached to them, not just for surveillance, but for the operator to view through
                                the camera to control
                                the drone. ... Civil agencies often use drones to survey land and monitor animal
                                populations.</p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1507724571015-2a7d95884528?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGRyb25lfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60"
                            alt="">
                    </div> <!-- / row -->
                </div> <!-- / Item 03 -->
            </div>
        </section>
    </div>


    </div>
    <div id="footer"></div>

    <script>
    $(function() {
        $("#header").load("includes/navigation.html");
        $("#footer").load("includes/footer.html");
    });
    </script>


    <!-- partial -->

    <script src="./js/profile.js"></script>

</body>

</html>