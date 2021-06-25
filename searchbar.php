<?php
require "a.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Search Bar</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/search.css">
  <script src="js/search.js"></script>

</head>

<body>

  <div id="header"></div>
  <form action="searchbar.php" method="POST">
    <!-- partial:index.partial.html -->
    <div class="container">
      <input type="text" placeholder="Search..." name="search" required />
      <div class="search"></div>
    </div>
    <!-- partial -->
  </form>
  <div class="results">
    <div class="wrapper">
      <div class="profile-card js-profile-card">
        <div class="profile-card__img">
          <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1537638518/Ba%C5%9Fl%C4%B1ks%C4%B1z-1.jpg" alt="profile card">
        </div>

        <div class="profile-card__cnt js-profile-cnt">
          <div class="profile-card__name">Muhammed Erdem</div>
          <div class="profile-card__txt">Front-end Developer from <strong>Mesopotamia</strong></div>
          <div class="profile-card-loc">
            <span class="profile-card-loc__icon">
              <svg class="icon">
                <use xlink:href="#icon-location"></use>
              </svg>
            </span>

            <span class="profile-card-loc__txt">
              Istanbul, Turkey
            </span>
          </div>

          <!--<div class="profile-card-inf">
            <div class="profile-card-inf__item">
              <div class="profile-card-inf__title">1598</div>
              <div class="profile-card-inf__txt">Followers</div>
            </div>

            <div class="profile-card-inf__item">
              <div class="profile-card-inf__title">65</div>
              <div class="profile-card-inf__txt">Following</div>
            </div>

            <div class="profile-card-inf__item">
              <div class="profile-card-inf__title">123</div>
              <div class="profile-card-inf__txt">Articles</div>
            </div>

            <div class="profile-card-inf__item">
              <div class="profile-card-inf__title">85</div>
              <div class="profile-card-inf__txt">Works</div>
            </div>
          </div>--->

          <div class="profile-card-social">
            <a href="https://www.facebook.com/iaMuhammedErdem" class="profile-card-social__item facebook" target="_blank">
              <span class="icon-font">
                <svg class="icon">
                  <use xlink:href="#icon-facebook"></use>
                </svg>
              </span>
            </a>

            <a href="https://twitter.com/iaMuhammedErdem" class="profile-card-social__item twitter" target="_blank">
              <span class="icon-font">
                <svg class="icon">
                  <use xlink:href="#icon-twitter"></use>
                </svg>
              </span>
            </a>

            <a href="https://www.instagram.com/iamuhammederdem" class="profile-card-social__item instagram" target="_blank">
              <span class="icon-font">
                <svg class="icon">
                  <use xlink:href="#icon-instagram"></use>
                </svg>
              </span>
            </a>

            <a href="https://www.behance.net/iaMuhammedErdem" class="profile-card-social__item behance" target="_blank">
              <span class="icon-font">
                <svg class="icon">
                  <use xlink:href="#icon-behance"></use>
                </svg>
              </span>
            </a>

            <a href="https://github.com/muhammederdem" class="profile-card-social__item github" target="_blank">
              <span class="icon-font">
                <svg class="icon">
                  <use xlink:href="#icon-github"></use>
                </svg>
              </span>
            </a>

            <a href="https://codepen.io/JavaScriptJunkie" class="profile-card-social__item codepen" target="_blank">
              <span class="icon-font">
                <svg class="icon">
                  <use xlink:href="#icon-codepen"></use>
                </svg>
              </span>
            </a>

            <a href="http://muhammederdem.com.tr/" class="profile-card-social__item link" target="_blank">
              <span class="icon-font">
                <svg class="icon">
                  <use xlink:href="#icon-link"></use>
                </svg>
              </span>
            </a>

          </div>

          <div class="profile-card-ctr">
            <button class="profile-card__button button--blue js-message-btn">Message</button>
            <button class="profile-card__button button--orange">Follow</button>
          </div>
        </div>

        <div class="profile-card-message js-message">
          <form class="profile-card-form">
            <div class="profile-card-form__container">
              <textarea placeholder="Say something..."></textarea>
            </div>

            <div class="profile-card-form__bottom">
              <button class="profile-card__button button--blue js-message-close">
                Send
              </button>

              <button class="profile-card__button button--gray js-message-close">
                Cancel
              </button>
            </div>
          </form>

          <div class="profile-card__overlay js-message-close"></div>
        </div>

      </div>

    </div>
  </div>

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
    }

    if (count($result1) > 0) {
      foreach ($result1 as $a) {
        printf("<div>%s - %s</div>", $a['skill_name'], $a['skill_owner']);
      }
    }

    if (count($result2) > 0) {
      foreach ($result2 as $d) {
        printf("<div>%s - %s</div>", $d['title'], $d['owner']);
      }
    }
  }

  ?>
  </div>
  </div>
  <div id="footer"></div>
  <!-- partial -->
  <script>
    $(function() {
      $("#header").load("includes/navigation.html");
      $("#footer").load("includes/footer.html");
    });
  </script>


</body>

</html>