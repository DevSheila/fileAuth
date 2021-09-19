<?php

include("config.php");
session_start();

$regNo= $_POST['regNologin'];
$password= $_POST['passwordlogin'];

// Check connection
if (!$conn ||mysqli_connect_errno()) {
  echo("Connection failed: " . mysqli_connect_error());
}else{
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $regNo = mysqli_real_escape_string($conn,$_POST['regNologin']);
    $password = mysqli_real_escape_string($conn,$_POST['passwordlogin']); 


    
    $sql = "SELECT id FROM students WHERE regNo = '$regNo' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
  
    if($count == 1) {
        $_SESSION['regNo'] =$regNo;
        $_SESSION['password'] =$password;
  
        header("Location: profile.php");
     

    }else{
      
        header("Location: profile.php");
      }
 }
}

?>