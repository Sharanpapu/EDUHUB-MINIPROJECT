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
    <div class="row">
      <?php
      //  PROCESS SEARCH WHEN FORM SUBMITTED
      if (isset($_POST['search'])) {
        //  SEARCH FOR USERS
        require "search.php";

        //  DISPLAY RESULTS
        if (count($results) > 0) {
          foreach ($results as $r) {
      ?>

            <div class="col-lg-4">
              <div class="wrapper">
                <div class="profile-card js-profile-card">
                  <div class="profile-card__img">
                    <img src="uploads/profile_image/<?= $r['profile_image'] ?>" alt="profile card">
                  </div>

                  <div class="profile-card__cnt js-profile-cnt">
                    <div class="profile-card__name"><?php echo $r['first_name']; ?></div>
                    <div class="profile-card__txt"><?php echo $r['title']; ?> from <strong><?php echo $r['dept']; ?>, <?php echo $r['institution']; ?></strong></div>
                    <div class="profile-card-loc">
                      <span class="profile-card-loc__txt">
                        <?php echo $r['city']; ?>
                      </span>
                    </div>
           
                    <div class="profile-card-social">
                      <a href="<?php echo $r['linkedin']; ?>" class="profile-card-social__item facebook" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-facebook"></use>
                          </svg>
                        </span>
                      </a>
                      <a href="<?php echo $r['edumate']; ?>" class="profile-card-social__item instagram" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-instagram"></use>
                          </svg>
                        </span>
                      </a>

                      <a href="<?php echo $r['github']; ?>" class="profile-card-social__item github" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-github"></use>
                          </svg>
                        </span>
                      </a>


                      <a href="<?php echo $r['website']; ?>" class="profile-card-social__item link" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-link"></use>
                          </svg>
                        </span>
                      </a>

                    </div>

                    <div class="profile-card-ctr">
                      <button class="profile-card__button button--blue">View Profile</button>
                      <button class="profile-card__button button--orange">Notify</button>
                    </div>
                  </div>
                </div>


              </div>

            </div> 
            <?php }
                }
                    ?>




        <?php
        if (count($result1) > 0) {
          foreach ($result1 as $a) {
            $query = "SELECT * FROM `user` where email='$a[skill_owner]'";
            $userdata = $conn->query($query);
            $r = $userdata->fetch_assoc();
        ?>
                        <div class="col-lg-4">
              <div class="wrapper">
                <div class="profile-card js-profile-card">
                  <div class="profile-card__img">
                    <img src="uploads/profile_image/<?= $r['profile_image'] ?>" alt="profile card">
                  </div>

                  <div class="profile-card__cnt js-profile-cnt">
                    <div class="profile-card__name"><?php echo $r['first_name']; ?></div>
                    <div class="profile-card__txt"><?php echo $r['title']; ?> from <strong><?php echo $r['dept']; ?>, <?php echo $r['institution']; ?></strong></div>
                    <div class="profile-card-loc">
                      <span class="profile-card-loc__txt">
                        <?php echo $r['city']; ?>
                      </span>
                    </div>
           
                    <div class="profile-card-social">
                      <a href="<?php echo $r['linkedin']; ?>" class="profile-card-social__item facebook" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-facebook"></use>
                          </svg>
                        </span>
                      </a>
                      <a href="<?php echo $r['edumate']; ?>" class="profile-card-social__item instagram" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-instagram"></use>
                          </svg>
                        </span>
                      </a>

                      <a href="<?php echo $r['github']; ?>" class="profile-card-social__item github" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-github"></use>
                          </svg>
                        </span>
                      </a>


                      <a href="<?php echo $r['website']; ?>" class="profile-card-social__item link" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-link"></use>
                          </svg>
                        </span>
                      </a>

                    </div>

                    <div class="profile-card-ctr">
                      <button class="profile-card__button button--blue">View Profile</button>
                      <button class="profile-card__button button--orange">Notify</button>
                    </div>
                  </div>
                </div>


              </div>

            </div> 

      <?php
          }
        }
      }

      ?>
      <?php
      $result2=""; 
      if (is_countable($result2)&&count($result2) > 0) {
          foreach ($result2 as $a) {
            $query = "SELECT * FROM `user` where email='$a[owner]'";
            $userdata = $conn->query($query);
            $r = $userdata->fetch_assoc();
        ?>
                        <div class="col-lg-4">
              <div class="wrapper">
                <div class="profile-card js-profile-card">
                  <div class="profile-card__img">
                    <img src="uploads/profile_image/<?= $r['profile_image'] ?>" alt="profile card">
                  </div>

                  <div class="profile-card__cnt js-profile-cnt">
                    <div class="profile-card__name"><?php echo $r['first_name']; ?></div>
                    <div class="profile-card__txt"><?php echo $r['title']; ?> from <strong><?php echo $r['dept']; ?>, <?php echo $r['institution']; ?></strong></div>
                    <div class="profile-card-loc">
                      <span class="profile-card-loc__txt">
                        <?php echo $r['city']; ?>
                      </span>
                    </div>
           
                    <div class="profile-card-social">
                      <a href="<?php echo $r['linkedin']; ?>" class="profile-card-social__item facebook" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-facebook"></use>
                          </svg>
                        </span>
                      </a>
                      <a href="<?php echo $r['edumate']; ?>" class="profile-card-social__item instagram" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-instagram"></use>
                          </svg>
                        </span>
                      </a>

                      <a href="<?php echo $r['github']; ?>" class="profile-card-social__item github" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-github"></use>
                          </svg>
                        </span>
                      </a>


                      <a href="<?php echo $r['website']; ?>" class="profile-card-social__item link" target="_blank">
                        <span class="icon-font">
                          <svg class="icon">
                            <use xlink:href="#icon-link"></use>
                          </svg>
                        </span>
                      </a>

                    </div>

                    <div class="profile-card-ctr">
                      <button class="profile-card__button button--blue">View Profile</button>
                      <button class="profile-card__button button--orange">Notify</button>
                    </div>
                  </div>
                </div>


              </div>

            </div> 

      <?php
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