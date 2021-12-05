<?php
//  DATABASE CONFIG 
define('DB_HOST', 'localhost');
define('DB_NAME', 'eduhub-sairam');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// CONNECT TO DATABASE
try {
  $pdo = new PDO(
    "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
    DB_USER, DB_PASSWORD, [
       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

//  SEARCH
$stmt = $pdo->prepare("SELECT * FROM `user` WHERE `first_name` LIKE ? OR `email` LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }

$stmt = $pdo->prepare("SELECT * FROM `skill` WHERE `skill_name` LIKE ? OR `skill_owner` LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%"]);
$result1 = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($result1); }

$stmt = $pdo->prepare("SELECT * FROM `project` WHERE `title` LIKE ? OR `owner` LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%"]);
$result2 = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($result2); }


?>