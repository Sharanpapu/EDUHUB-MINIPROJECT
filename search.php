<?php
	require "a.php";
	if (isset($_POST['query'])) {
		$q = $conn->real_escape_string($_POST['q']);
		$column = $conn->real_escape_string($_POST['column']);

		if ($column == "" || ($column != "first_name" && $column != "featured1" && $column != "skill1"))
			$column = "first_name";
        
		$sql = $conn->query("SELECT * FROM user WHERE $column LIKE '%$q%'");
	}
?>

<?php
	$query = $_GET['query']; 
	
	
	$min_length = 3;
	
	
	if(strlen($query) >= $min_length){ 
		
		$query = htmlspecialchars($query); 
		
		
		$query = $conn->real_escape_string($query);
		
		
		$raw_results = $conn->query("SELECT * FROM user
			WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')");
			
	
		
		if(mysql_num_rows($raw_results) > 0){ 
			
			while($results = mysql_fetch_array($raw_results)){
			
			
				echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
				
			}
			
		}
		else{ 
			echo "No results";
		}
		
	}
	else{ 
		echo "Minimum length is ".$min_length;
	}
?>