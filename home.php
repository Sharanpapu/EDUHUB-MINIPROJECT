<?php
    require "a.php";
    $email=$_SESSION['email'];

    	//For Retrieval of Page data
	$sql = "SELECT * from page where id='2'";
	$result = $conn->query($sql);
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$title=$row["title"];
		}
  if(!(isset($_SESSION['email'])))
    {
     header('location:login.php');
    }
    	//userdata fetching 

	$query1 = "SELECT * from `post`";
	$postdata=$conn->query($query1);
?>
<!DOCTYPE html>
    <html>
        <head>
        <title><?php echo "$title";?></title>
  <script src="//use.typekit.net/xyl8bgh.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<script>try{Typekit.load();}catch(e){}</script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://codepen.io/andytran/pen/vLmRVp.css'>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div id="header"></div>
<h1></h1>
<br>
<h1><br></h1>
<!-- partial:index.partial.html -->
  <!-- Normal Demo-->
  <div class="row">
    <?php while($row=$postdata->fetch_assoc())    { ?>

    <div class="info">
    </div>
    <div class="demo-title">
    </div>
    <!-- Post-->
    <div class="col-lg-4">
        <div class="post-module">
        <!-- Thumbnail-->
          <div class="thumbnail">
            <div class="date">
                <div class="day">27</div>
                <div class="month">Mar</div>
            </div>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
          </div>
          <!-- Post Content-->
          <div class="post-content">
        </div>
        <!-- Post Content-->
        <div class="post-content">
            <div class="category"><?php echo stripslashes(trim($row['datetime']));?></div>
            <h1 class="title"><?php echo $row['post_title'];?></h1>
            <h2 class="sub_title"><?php echo $row['tag1'];?><?php echo $row['tag2'];?></h2>
            <p class="description"><?php echo $row['post_description'];?></p>
            <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
        </div>
    </div>
        </div>

    <?php } ?>
  </div>
</div>
<div id="footer"></div>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>
<script>
        $(function(){
    $("#header").load("includes/navigation.html"); 
    $("#footer").load("includes/footer.html");
    }); 

    $(window).load(function() {
  $('.post-module').hover(function() {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });
});
</script>   


 </body>
</html>
