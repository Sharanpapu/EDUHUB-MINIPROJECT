<?php
require "a.php";
$email=$_SESSION['email'];





$name ="";
$website="";

if (isset($_POST['post'])) {
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 

    //String Validation  
    if (emptyempty($_POST["post_title"])) 
    {  
        $nameErr = "Title is required";  
    } 
    else 
    {  
       $name = input_data($_POST["post_title"]);  
           // check if title only contains letters and whitespace  
           if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
               $nameErr = "Only alphabets and white space are allowed";  
           }  
   } 
   
   
   //URL Validation      
   if (emptyempty($_POST["url"])) 
   {  
    $website = "";  
   } 
    else 
    {  
        $website = input_data($_POST["url"]);  
        // check if URL address syntax is valid  
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
        {  
            $websiteErr = "Invalid URL";  
        }      
    }  
}


function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }

}

//For Retrieval of Page data
$sql = "SELECT * from page where id='10'";
$result = $conn->query($sql);
// output data of each row
while ($row = $result->fetch_assoc()) {
    $title = $row["title"];
    $des=$row['description'];
  }
 //if user is signed in or not check
        if(!(isset($_SESSION['email'])))
    {
     header('location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo "$title"; ?></title>
    <script>
        function validate(){
           let x = document.forms["myPost"]["post_title"].value;
           if (x == "") {
              alert("Name must be filled out");
              return false;
         }
    }
    </script>
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
        <div class="new_post">
            <section id="contact-wrap">
                <div class="container">
                    <h3><?php echo "$des"; ?></h3>
                    <form action="newpost.php" method="post" name="myPost" enctype="multipart/form-data" onsubmit="return validate();">
                        <div class="account-container">
                            <div class="account-pic-container">
                                <img src="images/logo.jpg" />
                            </div>
                            <div class="account-info-container">
                                <div class="account-email">
                                    <label for="post_title">TITLE</label>
                                    <input type="text" id="post_title" name="post_title" class="form-control" required/> >
                                </div>

                                <div class="account-fullname">
                                    <div class="firstname">
                                        <label for="tag1">PRIMARY TAG</label>
                                        <input type="text" id="tag1" name="tag1" class="form-control" required />
                                    </div>
                                    <div class="lastname">
                                        <label for="tag2">SECONDARY TAG</label>
                                        <input type="text" id="tag2" name="tag2" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="account-fullname">
                                    <div class="firstname">
                                        <label for="mention">MENTION</label>
                                        <input type="text" id="mention" name="mention" class="form-control" required />
                                    </div>
                                    <div class="lastname">
                                        <label for="url">URL</label>
                                        <input type="text" id="url" name="url" class="form-control" required />
                                    </div>
                                </div>
                                <div class="account-bio">
                                    <label for="post_description">DESCRIPTION</label>
                                    <textarea id="post_description" cols="30" rows="2" name="post_description" class="form-control"  required ></textarea>
                                </div>
                            </div>
                            <div class="profile_picture">
                                <?php if (isset($_GET['error'])): ?> <p>
                                    <?php echo $_GET['error']; ?></p>
                                <?php endif ?>

                                <input type="file" name="post_image">
                            </div>

                        </div>
                        <div class="user-action">
                            <button name="post" id='post' >POST</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        

    </body>

    

    </html>
    <div id="footer"></div>

    <!-- partial -->
    <script>
    $(function() {
        $("#header").load("includes/navigation.html");
        $("#footer").load("includes/footer.html");
    });
     
    

    // function validate(){
    //         var  val = document.getElementById("post_description").value;
                   
    //                 if (/^\s*$/g.test(val)) {
    //                      alert("Enter your post description");
    //                document.getElementById("post_description").focus();
    //            }
    //            else {
    //               return True;
    //            }
    //         }
    </script>
    
</body>

</html>