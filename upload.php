<?php 
    require "a.php";
	$email=$_SESSION['email'];


if (isset($_POST['image_upload'])) {

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
                  }}				
			}
		}
	else {
		$em = "unknown error occurred!";
        echo '<script>alert("Sorry uplasdxaxoaded.")</script>';		

		header("Location: settings.php?error=$em");
	}