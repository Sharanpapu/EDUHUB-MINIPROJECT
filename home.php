<?php
    include_once "a.php";
    	//For Retrieval of Page data
	$sql = "SELECT * from page where id='2'";
	$result = $conn->query($sql);
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$title=$row["title"];
		}	

?>
<!DOCTYPE html>
    <html>
        <head>
        <title><?php echo "$title";?></title>
        </head>
        <body>
            <div id="header"></div>



            <div id="footer"></div>
        </body>
        <script>
        $(function(){
    $("#header").load("includes/navigation.html"); 
    $("#footer").load("includes/footer.html");
    }); 
    </script>   


    </html>
</!DOCTYPE>