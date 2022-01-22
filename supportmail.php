<?php
if(isset($_POST['email'])){
    $email = $_POST['email']; 
}else{
    $email = "Name not set in GET Method";
}



$sql = "Select * from feedback where email='$email'";




$receiver =  mysqli_real_escape_string($conn,$email);

$subject = "Hi There!!";


$body = "Thanks for reaching out! 

will be checking in with you in a few days to update you on the status of issue.

If you have any queries, comments please donot hesitate to reach out via  eduhubsairam@gmail.com .
We will contact you in the very near future to ensure you are completely satisfied with our services you have received so far.


Have a great day,
EDUHUB @Team:CodeWizard
";
$sender = "eduhubsairam@gmail.com";


if(mail($receiver, $subject, $body, $sender)){
    //echo "Email sent successfully to $receiver";
}else{
    //echo "Sorry, failed while sending mail!";
}
?>
