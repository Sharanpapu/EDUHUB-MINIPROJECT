<?php



$email = $_POST["email"];

$sql = "Select * from user where email='$email'";
	



$receiver = mysqli_real_escape_string($conn, $email);
$subject = "Welcome To EDUHUB!!";


$body = "Thanks for joining the EDUHUB community.

Our website is specially designed for and to embrace students . It will help you to demonstrate your skills , convert your thoughts into products , attract the incubators and post your achievements here. Get to know the recent updates and students' skill set .

If you have any queries, comments please donot hesitate to reach out via  eduhubsairam@gmail.com . We will contact you in the very near future to ensure you are completely satisfied with our services you have received so far.

All the best.


Thank you ,
EDUHUB @Team:CodeWizard
";
$sender = "eduhubsairam@gmail.com";


if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>
