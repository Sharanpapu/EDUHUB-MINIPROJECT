<?php
	include_once("a.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="css/login.css">

    </head>
<body>
<!-- partial:index.partial.html -->
<form>
  <input id="input-1" type="email" placeholder="Enter your Email!" required autofocus />
  <label for="input-1">
    <span class="label-text">Email</span>
    <span class="nav-dot"></span>
    <div class="signup-button-trigger">Login</div>
  </label>
  <input id="input-2" type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required />
  <label for="input-2">
    <span class="label-text">Password</span>
    <span class="nav-dot"></span>
  </label>
  <button type="submit">Login Into Your Account</button>
  <p class="tip">Press Tab</p>
  <div class="signup-button">Login</div>
</form>
<!-- partial -->

</body>

</html>