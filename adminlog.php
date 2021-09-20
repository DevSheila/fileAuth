<?php
session_start();


$depIDlogin= $_POST['depIDlogin'];
$password= $_POST['password'];

$success = false;
$username ="";

$jsondata = file_get_contents("admin.json");
$json =json_decode($jsondata,true);



foreach($json['admin'] as $admin){
  $_SESSION['depIDlogin'] =$depIDlogin;
  $_SESSION['password'];
    if( ($admin['depIDlogin']==$depIDlogin) && ($admin['password']===$password)){
   
      $_SESSION['depIDlogin'] =$depIDlogin;
      $_SESSION['password'] =$password;

     
      header("Location: adminprofile.php");
    }else if(!($admin['depIDlogin']==$depIDlogin) ||!($admin['password']===$password)){

      header("Location: adminprofile.php");
    }else{
      
      header("Location: adminprofile.php");
    }

}

?>