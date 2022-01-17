<?php
if( isset( $_POST['post'] ) )
{
 validate_data($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($data);
  return $data;    
 }

 $name = validate_data( $_POST['username'] );
//  $emailid = validate_data( $_POST['useremail'] );
//  $password = validate_data( $_POST['user_password'] );

//  $host = 'localhost';
//  $user = 'root';
//  $pass = ' ';

//  mysql_connect($host, $user, $pass);
//  mysql_select_db('demo');

//  $insertdata=" INSERT INTO user_data VALUES( '$name','$emailid','$password' ) ";
//  mysqli_query($insertdata);
}
?>