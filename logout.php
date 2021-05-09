<?php
session_start();  

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "eduhub-sairam";
     try {
       $time = date('Y-m-d h:i:s');
       $email = $_SESSION['email'];

     $db_conn = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
     $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $stmt = $db_conn->prepare("UPDATE user SET status='0',last_seen = current_timestamp() WHERE email = '$email'");
 $stmt->bindParam(':lastlogin', $time); 
 //$stmt->bindParam(':username', $_SESSION['username']); 
 $stmt->execute();
   session_destroy();
   header('location:index.php');  
}
catch(PDOException $e)
    {
    echo "Error:" . $e->getMessage();
    }
$db_conn = null;


?> 