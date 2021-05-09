<?php
    include_once "a.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>About US</title>
<link rel="stylesheet" href="css/about.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="header"></div>




<section class="section section--intro">
    <img class="hero__image" src="https://images.unsplash.com/photo-1557551220-4e0e9f87ff36?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bG9nb3xlbnwwfDJ8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="" />

    <svg class="cross-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
      <line x1="12" y1="5" x2="12" y2="19"></line>
      <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>

    <svg class="cross-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
      <line x1="12" y1="5" x2="12" y2="19"></line>
      <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>

    <div class="ring ring--left"></div>
    <div class="ring ring--right"></div>

    <h3 class="hero__title hero__title--1">HI, I'M JR Techie</h3>
    <h3 class="hero__title hero__title--1">Organization for Innovation </h3>

    <p class="hero__copy"><span>I'm not the usual one in the World but We Do Wonders than Wonders</span></p>
  </section>

  <section class="section section--text">
    <div class="box">
    we are the ones who love to change the world and you into a new set of Innovations and Wonders      
    <div class="line"></div>
    </div>
  </section>

  <section class="section section--works">
    <div class="cards">
      <a href="https://unsplash.com/photos/7e2pe9wjL9M" class="card card-1" data-cursor="hover"></a>
      <a href="https://unsplash.com/photos/mG28olYFgHI" class="card card-2" data-cursor="hover"></a>
      <a href="https://unsplash.com/photos/Q1p7bh3SHj8" class="card card-3" data-cursor="hover"></a>
    </div>

    <svg class="cross-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
      <line x1="12" y1="5" x2="12" y2="19"></line>
      <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>
  </section>

  <section class="section section--footer">
    <div class="big">Works</div>

    <div class="footer__link">
      <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="var(--skyblue)" style="margin-bottom: 2rem" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
        </path>
      </svg>
    </div>

    <p class="footer__copy">
        We are the students Like you, Come and join the hands with us    
    </p>
<div class="row">
    <a href="https://github.com/ismamz" class="footer__button" data-cursor="hover" target="_blank" rel="noopener noreferer">Follow us on Github</a>
    <a href="https://linkedin.com/ismamz" class="footer__button" data-cursor="hover" target="_blank" rel="noopener noreferer">Follow us on Linkedin</a>
</div>
<a href="index.php" class="footer__button" data-cursor="hover" rel="noopener noreferer">Get Back to Home</a>

  </section>

  <div class="cursor"></div>
  <div id="footer"></div>

<!-- partial -->
<script  src="js/about.js"></script>
<script>
        $(function(){
    $("#header").load("includes/navigation.html"); 
    $("#footer").load("includes/footer.html");
    }); 
    </script>   


</body>
</html>
