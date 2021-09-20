<?php
include("config.php");
session_start();
// error_reporting(0);
if($_SERVER['REQUEST_METHOD']=="POST"){
  $depIDlogin=mysqli_real_escape_string($conn,$_POST['depIDlogin']);
  $password= mysqli_real_escape_string($conn,$_POST['passwordlogin']);
 $query= "SELECT * FROM admin WHERE depIDlogin='$depIDlogin' and password = '$password'";
$res=mysqli_query($conn,$query) or die(mysqli_error($conn));
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
 $count=mysqli_num_rows($res);
 if($count==1){
   $_SESSION['user'] =$depIDlogin;
  //  $_SESSION['password'] =$password;
    header("Location:adminprofile.php");
 }else{
   echo "Invalid Login Details";
 }
}
// $success = false;
// $username ="";

// $jsondata = file_get_contents("admin.json");
// $json =json_decode($jsondata,true);



// foreach($json['admin'] as $admin){
//   $_SESSION['depIDlogin'] =$depIDlogin;
//   $_SESSION['password'];
//     if( ($admin['depIDlogin']==$depIDlogin) && ($admin['password']===$password)){
   
//       $_SESSION['depIDlogin'] =$depIDlogin;
//       $_SESSION['password'] =$password;

     
//       header("Location: adminprofile.php");
//     }else if(!($admin['depIDlogin']==$depIDlogin) ||!($admin['password']===$password)){

//       header("Location: adminprofile.php");
//     }else{
      
//       header("Location: adminprofile.php");
//     }

// }

// ?>