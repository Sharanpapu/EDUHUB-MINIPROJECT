<?php
require "a.php";
$email=$_SESSION['email'];

//for profile image upload
if (isset($_POST['post'])) {

	echo "<pre>";
	print_r($_FILES['image']);
	echo "</pre>";

	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];

	if ($error === 0) {
		if ($img_size > 12500000) {
            $em = "Sorry, your file is too large.";
            header("Location: newexperience.php?error=$em");
		}
        else 
        {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png", "webp"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
    			$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/experience/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                	// Insert into Database
                	$paup="INSERT INTO `experience` (`owner`,`title`,`description`,`image`,`provider`,`url`,`start`,`end`) VALUES ('$email','" . $_POST['title'] . "','" . $_POST['description'] . "','$new_img_name','" . $_POST['provider'] . "','" . $_POST['url'] . "','" . $_POST['start'] . "','" . $_POST['end'] . "')"; 
            
                    if ($conn->query($paup) === TRUE) {
                        echo "Record updated successfully";
                        $em="updated post";
                        header("Location: settings.php");

                      } else {
                        echo "Error updating record: " . $conn->error;
                      }
            }				
            else {
				$em = "You can't upload files of this type";
		        header("Location: newexperience.php?error=$em");
			}
		}
    }else {
		$em = "Image is not Selected!";
		header("Location: newexperience.php?error=$em");
	}

}	

//For Retrieval of Page data
$sql = "SELECT * from page where id='13'";
$result = $conn->query($sql);
// output data of each row
while ($row = $result->fetch_assoc()) {
    $title = $row["title"];
    $des=$row['description'];
  }
          //if user is signed in or not check
        if(!(isset($_SESSION['email'])))
    {
     header('location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo "$title"; ?></title>
    <link rel="stylesheet" href="css/help.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="header"></div>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="new_experience">
            <section id="contact-wrap">
                <div class="container">
                    <h3><?php echo "$des"; ?></h3>
                    <form action="newexperience.php" method="post" enctype="multipart/form-data">
                        <div class="account-container">
                            <div class="account-pic-container">
                                <img src="images/logo.jpg" />
                            </div>
                            <div class="account-info-container">
                                <label for="title">TITLE</label>
                                <input type="text" id="title" name="title" class="form-control">

                                <label for="provider">COMPANY/ORGANISATION</label>
                                <input type="text" id="provider" name="provider" class="form-control">
                                <div class="account-fullname">
                                    <div class="firstname">
                                        <label for="start">FROM</label>
                                        <input type="date" id="start" name="start" class="form-control">
                                    </div>
                                    <div class="lastname">
                                        <label for="end">TO</label>
                                        <input type="date" id="end" name="end" class="form-control">
                                    </div>
                                </div>

                                <label for="url">REFERENCE URL</label>
                                <input type="text" id="url" name="url" class="form-control">
                                <div class="account-bio">
                                    <label for="description">DESCRIPTION</label>
                                    <textarea id="description" cols="30" rows="2" name="description"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="profile_picture">
                                <?php if (isset($_GET['error'])): ?> <p>
                                    <?php echo $_GET['error']; ?></p>
                                <?php endif ?>

                                <input type="file" name="image">
                            </div>

                        </div>
                        <div class="user-action">
                            <button name="post" id='post'>POST</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>

    </body>

    </html>
    <div id="footer"></div>

    <!-- partial -->
    <script>
    $(function() {
        $("#header").load("includes/navigation.html");
        $("#footer").load("includes/footer.html");
    });
    </script>
</body>

</html>