<?php
require "a.php";

//For Retrieval of Page data
$sql = "SELECT * from page where id='9'";
$result = $conn->query($sql);
// output data of each row
while ($row = $result->fetch_assoc()) {
  $title = $row["title"];
}
if (isset($_POST['send'])) {
  $sender = $_POST['name'];
  $sender_title = $_POST['title'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $sql1 = "INSERT INTO `feedback` (`sender`,`sender_title`,`email`,`subject`, `message`) VALUES ('$sender', 
    '$sender_title','$email','$subject','$message')";

  $result1 = mysqli_query($conn, $sql1);
}
//code to sql

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo "$title"; ?></title>
    <link rel="stylesheet" href="css/help.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="header"></div>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>









    
        <div class="contact_us">
            <section id="contact-wrap">
                <div class="container">
                    <h3>Drop Us a Line !</h3>
                    <form action="help.php" method="POST">
                        
                        <div class="account-container">
                            <div class="account-pic-container">
                                <img src="images/logo.png" alt="Eduhub Logo">
                            </div>

                             

                            <div class="account-info-container">
                                <div class="account-email">
                                    <label for="email">EMAIL</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>

                                <div class="account-fullname">
                                    <div class="firstname">
                                        <label for="firstname">FIRST NAME</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="lastname">
                                        <label for="lastname">TITLE</label>
                                        <input type="text" id="title" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="account-username">
                                    <label for="username">TITLE OF MESSAGE</label>
                                    <input type="text" class="form-control" name='subject'>
                                </div>
                                <div class="account-bio">
                                    <label for="bio">MESSAGE</label>
                                    <textarea id="bio" cols="30" rows="2" name="message"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="user-action">
                            <button name="send">Save</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        
    </body>

    </html>
    <!--------CHATBOT--------->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <script type="text/javascript">
    $(function(){
        $('#button').click(function(){ 
            if(!$('#iframe').length) {
                    $('#iframeHolder').html('<iframe id="iframe" class="frame"  width="350" height="540" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/f4f8e3c7-8da1-44f1-86e6-ebb26bc5afe9"></iframe>');
            }
        });   
    });

    function myFunction() {
    var x = document.getElementById("iframe");
    if (x.style.display === "none") {
    x.style.display = "block";
    } else {
    x.style.display = "none";
  }
}



    </script>
     <div class="containerbutton">
        
        <button id="button" class="myButton" onclick="myFunction()">Chat</button>
           
         </div>
    <div id="iframeHolder"></div>
    
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

        
   