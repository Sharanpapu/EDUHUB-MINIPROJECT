<?php
require "a.php";
$email=$_SESSION['email'];

//for profile image upload
if (isset($_POST['post'])) {

	echo "<pre>";
	print_r($_FILES['post_image']);
	echo "</pre>";

	$img_name = $_FILES['post_image']['name'];
	$img_size = $_FILES['post_image']['size'];
	$tmp_name = $_FILES['post_image']['tmp_name'];
	$error = $_FILES['post_image']['error'];

	if ($error === 0) {
		if ($img_size > 12500000) {
            $em = "Sorry, your file is too large.";
            header("Location: newpost.php?error=$em");
		}
        else 
        {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png", "webp"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
    			$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/post/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                	// Insert into Database
                	$paup="INSERT INTO `post` (`post_owner`,`post_title`,`post_description`,`post_image`,`tag1`,`tag2`,`mention`,`url`)VALUES ('$email','" . $_POST['post_title'] . "','" . $_POST['post_description'] . "','$new_img_name','" . $_POST['tag1'] . "','" . $_POST['tag2'] . "','" . $_POST['mention'] . "','" . $_POST[`url`] . "')"; 
            
                    if ($conn->query($paup) === TRUE) {
                        echo "Record updated successfully";
                        $em="updated post";
                        header("Location: home.php");

                      } else {
                        echo "Error updating record: " . $conn->error;
                      }
            }				
            else {
				$em = "You can't upload files of this type";
		        header("Location: new_post.php?error=$em");
			}
		}
    }else {
		$em = "Image is not Selected!";
		header("Location: new_post.php?error=$em");
	}

}	

//For Retrieval of Page data
$sql = "SELECT * from page where id='10'";
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
        <script>
        function validate(){
           let x = document.forms["myPost"]["post_title"].value;
           
           if (x == "") {
              alert("Title must be filled out");
              return false;
         }
         let url = document.forms["myPost"]["url"].value;
         var res = url.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
		    
             if(res!==null){
                   return True;
             }
             else{
                alert("Enter a valid url");
                return false;
             }
		 
    }
    </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="new_post">
            <section id="contact-wrap">
                <div class="container">
                    <h3><?php echo "$des"; ?></h3>
                    <form action="newpost.php" method="post" enctype="multipart/form-data" name="myPost" onsubmit="return validate();">
                        <div class="account-container">
                            <div class="account-pic-container">
                                <img src="images/logo.jpg" />
                            </div>
                            <div class="account-info-container">
                                <div class="account-email">
                                    <label for="post_title">TITLE</label>
                                    <input type="text" id="post_title" name="post_title" class="form-control">
                                </div>

                                <div class="account-fullname">
                                    <div class="firstname">
                                        <label for="tag1">PRIMARY TAG</label>
                                        <input type="text" id="tag1" name="tag1" class="form-control" required />
                                    </div>
                                    <div class="lastname">
                                        <label for="tag2">SECONDARY TAG</label>
                                        <input type="text" id="tag2" name="tag2" class="form-control" required />
                                    </div>
                                </div>
                                <div class="account-fullname">
                                    <div class="firstname">
                                        <label for="mention">MENTION</label>
                                        <input type="text" id="mention" name="mention" class="form-control" required />
                                    </div>
                                    <div class="lastname">
                                        <label for="url">URL</label>
                                        <input type="text" id="url" name="url" class="form-control"  required />
                                    </div>
                                </div>
                                <div class="account-bio">
                                    <label for="post_description">DESCRIPTION</label>
                                    <textarea id="post_description" cols="30" rows="2" name="post_description"
                                        class="form-control" required ></textarea>
                                </div>
                            </div>
                            <div class="profile_picture">
                                <?php if (isset($_GET['error'])): ?> <p>
                                    <?php echo $_GET['error']; ?></p>
                                <?php endif ?>

                                <input type="file" name="post_image">
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

<!-- function validate(){
           var  val = document.getElementById("post_description").value;
                   
                     if (/^\s*$/g.test(val)) {
                          alert("Enter your post description");
                    document.getElementById("post_description").focus();
                }
            else {
                  return True;
               }
           } -->
</html>