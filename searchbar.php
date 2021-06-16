<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Search Bar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/search.css">

</head>
<body>
<form action="searchbar.php" method="POST"> 
<!-- partial:index.partial.html -->
<div class="container">
  <input type="text" placeholder="Search..." name="search" required/>
  <div class="search"></div>
</div>
<!-- partial -->
  



</form>
<?php
//  PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST['search'])) {
  //  SEARCH FOR USERS
  require "search.php";

  //  DISPLAY RESULTS
  if (count($results) > 0) {
    foreach ($results as $r) {
      printf("<div>%s - %s</div>", $r['first_name'], $r['email']);
    }
  } else { echo "No results found"; }
}
?>
</body>
</html>