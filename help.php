<?php
    require "a.php";

    	//For Retrieval of Page data
	$sql = "SELECT * from page where id='9'";
	$result = $conn->query($sql);
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$title=$row["title"];
		}
if(isset($_POST['send']))
{
    $sender=$_POST['name'];
    $sender_title=$_POST['title'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $sql1 = "INSERT INTO `feedback` (`sender`,`sender_title`,`email`,`subject`, `message`) VALUES ('$sender', 
    '$sender_title','$email','$subject','$message')";

    $result1 = mysqli_query($conn, $sql1);
}
    //code to sql

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo "$title";?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/help.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="header"></div>
<h1><br><br><br></h1>
<section class="contact-wrap">
  <form action="help.php" method="POST" class="contact-form">
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">First Name</label>
        <input type="text" class="form-control" name='name'>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">Designation</label>
        <input type="text" class="form-control" name='title'>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block">
        <label for="">Email</label>
        <input type="text" class="form-control" name='email'>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block">
        <label for="">Message Subject</label>
        <input type="text" class="form-control" name='subject'>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block textarea">
        <label for="">Drop your message here</label>
        <textarea rows="3" type="text" class="form-control"name='message'></textarea>
      </div>
    </div>
    <div class="col-sm-12">
      <button class="square-button" name='send'>Send</button>
    </div>
  </form>
</section>

<!-- follow me template -->
<div class="made-with-love">
  Made with 
  <i>♥</i> by 
  <a target="_blank" href="https://codepen.io/nikhil8krishnan">Jayachandran Ramadoss</a>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/help.js"></script>
  <script>
        $(function(){
    $("#header").load("includes/navigation.html"); 
    $("#footer").load("includes/footer.html");
    }); 
</script>
</body>
</html>
