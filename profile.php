<?php
    include_once "a.php";
    	//For Retrieval of Page data
	$sql = "SELECT * from page where id='3'";
	$result = $conn->query($sql);
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$title=$row["title"];
		}	
    if(!(isset($_SESSION['email'])))
		{
		 header('location:login.php');
		}
		


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo "$title";?></title>
<link rel="stylesheet" href="css/profile.css">

</head>

<body>
<div id="header"></div>
<h1><br><br></h1>

<!-- partial:index.partial.html -->
<div class='container'>
  <div class='sidebar'>
    <div class='sidebar__header'>
      <img alt='' class='sidebar__avatar' src='https://unsplash.it/30/?image=209'>
      <p>Jayachandran Ramadoss</p>
    </div>
    <div class='sidebar__menu-item'>
      <i class='fa fa-university'></i>
      Featured
      <div class='sidebar__label'>
        5
      </div>
    </div>
    <div class='sidebar__menu-item'>
      <i class='fa fa-bar-chart'></i>
      skills
    </div>
    <div class='sidebar__menu-item sidebar__menu-item--active'>
      <i class='fa fa-cog'></i>
      certifications
    </div>
    <div class='sidebar__menu-item'>
      <i class='fa fa-suitcase'></i>
      projects
    </div>
    <div class='sidebar__menu-item'>
      <i class='fa fa-envelope-o'></i>
        Accomplishments
      <div class='sidebar__badge'>
        3
      </div>
    </div>
    <div class='sidebar__menu-item'>
      <i class='fa fa-user-plus'></i>
      Referals
    </div>
  </div>
  <div class='main'>
    <div class='main__header'>
    </div>
    <div class='main__content'>
      <div class='main__avatar'>
        <div class='main__avatar--overlay'>
          John Doe
        </div>
      </div>
      <div class='main__settings-form'>
        <form action='#' method='post'>
          <label class='main__input-label'>Your name:</label>
          <input class='main__input' placeholder='John Doe' type='text'>
          <label class='main__input-label'>Your e-mail:</label>
          <input class='main__input' placeholder='johndoe@gmail.com' type='text'>
          <label class='main__input-label'>Your e-mail for notifications:</label>
          <input class='main__input' placeholder='johndoe@gmail.com' type='text'>
        </form>
        <button class='btn main__save-button'>Save</button>
        <button class='btn main__cancel-button'>Cancel</button>
      </div>
    </div>
  </div>
</div>
<h1><br></br></h1>
<div id="footer"></div>
<!-- partial -->
<script>
        $(function(){
    $("#header").load("includes/navigation.html"); 
    $("#footer").load("includes/footer.html");
    }); 
</script>   

</body>
</html>
