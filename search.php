<?php
	if (isset($_POST['submit'])) {
		$connection = new mysqli("localhost", "root", "root", "eduhub-sairam");
		$q = $connection->real_escape_string($_POST['q']);
		$column = $connection->real_escape_string($_POST['column']);

		if ($column == "" || ($column != "first_name" && $column != "Developed" && $column != "Skills"))
			$column = "first_name";

		$sql = $connection->query("SELECT first_name,email FROM user WHERE $column LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			while ($data = $sql->fetch_array())
				echo $data['first_name']." ".$data['email']."<br>";
		} else
			echo "Your search query doesn't match any data!";
	}
?>
<html>
	<head>
		<title>PHP Search Form</title>
	</head>
	<body>
		<form method="post" action="search.php">
			<input type="text" name="q" placeholder="Search...">
			<select name="column">
				<option value="">Select</option>
				<option value="firstName">First Name</option>
				<option value="Developed">Developed</option>
                                 <option value="Skills">Skills</option>
				
			</select>
			<input type="submit" name="submit" value="Go..">
		</form>
	</body>
</html>


    <div onclick="submitform()" style="color:blue;">Submit the form by clicking this</div>

        <script>
        function submitform()
        {
        document.getElementById("myform").submit();
        alert("your form submitted");
        }       
         </script>
