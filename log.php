

<?php
session_start();


$regNo= $_POST['regNologin'];
$password= $_POST['passwordlogin'];

$success = false;
$username ="";

$jsondata = file_get_contents("stud.json");
$json =json_decode($jsondata,true);



foreach($json['students'] as $student){
  $_SESSION['regNo'] =$regNo;
  $_SESSION['password'];
    if( ($student['regNo']==$regNo) && ($student['password']===$password)){
   
      $_SESSION['regNo'] =$regNo;
      $_SESSION['password'] =$password;

     
      header("Location: profile.php");
    }else if(!($student['regNo']==$regNo) ||!($student['password']===$password)){

      header("Location: profile.php");
    }else{
      
      header("Location: profile.php");
    }

}

