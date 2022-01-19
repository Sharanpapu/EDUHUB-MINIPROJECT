<?php
require "a.php";
$email = $_SESSION['email'];

//For Retrieval of Page data
$sql = "SELECT * from page where id='3'";
$result = $conn->query($sql);
// output data of each row
while ($row = $result->fetch_assoc()) {
    $title = $row["title"];
}
//if user is signed in or not check
if (!(isset($_SESSION['email']))) {
    header('location:login.php');
}
//userdata fetching 
$query = "SELECT * FROM `user` where email='$email'";
$userdata = $conn->query($query);
$out = $userdata->fetch_assoc();

//skilldata fetching
$ts_query = "SELECT * from `skill` where skill_owner='$email' AND skill_type='technical'";
$ts_data = $conn->query($ts_query);

$ps_query = "SELECT * from `skill` where skill_owner='$email' AND skill_type='personal'";
$ps_data = $conn->query($ps_query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo "$title"; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/includes/project.css">
    <link rel="stylesheet" type="text/css" href="css/includes/profilepic.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/includes/pskill.css">

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
                        <span><?php echo $out['first_name']; ?></span>
                        <strong>
                            <i class="fa fa-fw fa-star"></i>
                            <?php echo $out['title']; ?>
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="img-responsive" src="uploads/profile_image/<?= $out['profile_image'] ?>">
                        </div>
                        <div class="mc-description">
                            From : <?php echo $out['dept']; ?><br>
                            <?php echo $out['institution']; ?><br>
                            <?php echo $out['city']; ?>

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
                        <a class="fa fa-fw fa-linkedin" href="<?php echo $out['linkedin']; ?>"></a>
                        <a class="fa fa-github"href="<?php echo $out['github']; ?>"></a>
                        <a class="fa fa-fw fa-google-plus" href="<?php echo $out['website']; ?>"></a>
                        <a class="fa fa-fw fa-envelope" href="mailto:<?php echo $out['']; ?>?subject=Feedback&body=Message"></a>
                    </div>
                </article>
            </div>
            <!--end of profile pic-->

            <!----About bio section---->
            <div class="col-lg-8">
                <div class="card_about card_about1">
                    <p>
                        <?php echo $out['bio']; ?>
                    </p>
                </div>
            </div>
            <!---- end of About  bio section---->
            <div class="col-lg-12">
                <div class="skills">
                    <div class="container">
                        <div class="text">
                            <h2><span>Featured </span>Keys</h2>
                        </div>

                        <div class="skill-card">
                            <div class="card">
                                <i class="fas fa-file-code"></i>
                                <h4>Featured Skills</h4>
                                <p>
                                    <?php echo $out['featured1']; ?><br>
                                </p>
                            </div>


                            <div class="card">
                                <i class="fas fa-magic"></i>
                                <h4>Featured Experience</h4>
                                <p><?php echo $out['featured2']; ?><br></p>
                            </div>

                            <div class="card">
                                <i class="fab fa-sketch"></i>
                                <h4>Featured Achievement</h4>
                                <p> <?php echo $out['featured3']; ?><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <center>
                    <h1>Skills</h1>
                </center>
            </div>
            <!---Featured Block---->
            <div class="col-lg-4">
                <div class="scard">
                    <div class="face face1">
                        <div class="content">
                            <img src="https://images.pexels.com/photos/262438/pexels-photo-262438.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                            <h3>Technical Skills</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>
                                <?php while ($row = $ts_data->fetch_assoc()) { ?>
                            <p><?php echo $row['skill_name']; ?><br></p>
                        <?php } ?>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="scard">
                    <div class="face face1">
                        <div class="content">
                            <img src="https://images.pexels.com/photos/937481/pexels-photo-937481.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                            <h3>Personality Skills</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>
                                <?php while ($row = $ps_data->fetch_assoc()) { ?>
                            <p>
                                <?php echo $row['skill_name']; ?>
                            </p>
                        <?php } ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="scard">
                    <div class="face face1">
                        <div class="content">
                            <img src="https://images.pexels.com/photos/2292837/pexels-photo-2292837.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                            <h3>Miscellaneous Skills</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>
                            <p><?php echo $out['skill3']; ?></p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of featured block--->
        </div>
        <!-----all skills--------->

        <!-----all certifications--------->

        <!-----all conferences and competitions--------->

        <!-----awards and achievements--------->

        <!----projects------->

        <!----posts------->

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