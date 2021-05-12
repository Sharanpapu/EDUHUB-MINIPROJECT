<?php
    require "a.php";
	if (isset($_POST['submit'])) {
		$q = $conn->real_escape_string($_POST['q']);
		$column = $conn->real_escape_string($_POST['column']);

		if ($column == "" || ($column != "first_name" && $column != "featured1" && $column != "skill1"))
			$column = "first_name";
        
		$sql = $conn->query("SELECT * FROM user WHERE $column LIKE '%$q%'");
	}
?>
<html>
	<head>
		<title>PHP Search Form</title>
        <link rel='stylesheet' href='https://www.littlesnippets.net/css/codepen-result.css'>
        <link rel="stylesheet" href="css/search.css">

	</head>
<body>
<div id="header"></div>
<div class="container">
    <form method="post" action="search.php">
            <input type="text" name="q" placeholder="Search...">
            <select name="column">
                <option value="">Select</option>
                <option value="firstName">First Name</option>
                <option value="featured1">Developed</option>
                <option value="skill1">Skills</option>
            </select>
            <input type="submit" name="submit" value="Go..">
    </form>
    <div class="row">
        <?php while($row=$sql->fetch_assoc())   
        { ?>
            <figure class="snip1336 hover">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample74.jpg" alt="sample74" />
                <figcaption>
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample2.jpg" alt="profile-sample2" class="profile" />
                    <h3><?php echo $row['first_name'];?><span></h3>
                    <h5><?php echo $row['title'];?></span></h5>
                    <p><?php echo $row['bio'];?><br><?php echo $row['featured1'];?><?php echo $row['featured2'];?></p>
                    <a href="#" class="follow"><?php echo $row['email'];?></a>
                    <a href="#" class="info">More Info</a>
                </figcaption>
            </figure>
        <?php } ?>
    </div>
</div>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
   /* Demo purposes only */
   $(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
$(function(){
    $("#header").load("includes/navigation.html"); 
    }); 

</script>     


</body>
</html>
