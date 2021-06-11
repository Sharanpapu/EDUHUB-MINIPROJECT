<?php 
    require "a.php";
	$email=$_SESSION['email'];


if (isset($_POST['image_upload'])  && isset($_FILES['profile_image'])) {

	echo "<pre>";
	print_r($_FILES['profile_image']);
	echo "</pre>";

	$img_name = $_FILES['profile_image']['name'];
	$img_size = $_FILES['profile_image']['size'];
	$tmp_name = $_FILES['profile_image']['tmp_name'];
	$error = $_FILES['profile_image']['error'];

	if ($error === 0) {
		if ($img_size > 12500000) {
            $em = "Sorry, your file is too large.";
		    header("Location: settings.php?error=$em");
		}
        else 
        {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png", "webp"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
    			$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
                $profileimg="UPDATE `user` set profile_image='$new_img_name'  WHERE email='$email'";

                //$profileimg="UPDATE `user` set profile_image='$new_img_name'  WHERE email=$email";
                if ($conn->query($profileimg) == TRUE) {
                    echo "Record updated successfully";
                    header("Location:settings.php");

                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
            }				
            else {
				$em = "You can't upload files of this type";
		        header("Location: settings.php?error=$em");
			}
		}
    }else {
		$em = "Image is not Selected!";
		header("Location: settings.php?error=$em");
	}

}else {
	$em = "Image is not there!";
	header("Location: settings.php");
}	//for profile updation
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

	$fup="UPDATE `user` set featured1='" . $_POST['featured1'] . "',featured2='" . $_POST['featured2'] . "',featured3='" . $_POST['featured3'] . "' WHERE email='$email'";
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