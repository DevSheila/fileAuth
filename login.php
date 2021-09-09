<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
error_reporting(0);
// function verify ($regNo,$password)
$regNo = $_POST['regNologin'];
$password = $_POST['passwordlogin'];
$success = false;
$username ="";
 $course ="";
 $email = "";
$phoneno = "";
$studentDb = file("studentDb.txt");
foreach($studentDb as $logininfo){
  $studentDetails = explode('~',$logininfo);
  if($studentDetails[1] == $regNo && $studentDetails[6] == $password){
    $holder = array($username,$regNo,$gender,$age,$course,$email,$password,$phone);
    $success = true;
      $username = $studentDetails[0];
    $regNo =$studentDetails[1];
     $gender = $studentDetails[2];
    $age =$studentDetails[3];
    $course = $studentDetails[4];
    $email =$studentDetails[5];
     $password = $studentDetails[6];
    $phoneno =$studentDetails[7];

 $_SESSION['username']= $username;
$_SESSION['regNo']= $regNo;
   $_SESSION['gender']= $gender;
   $_SESSION['age']= $age;
   $_SESSION['course']= $course;
   $_SESSION['email']= $email;
   $_SESSION['phone']= $phone;
  // $_SESSION['password']= $_POST['password'];

   
     break;
  }
}
if($success){
  // print_r("Welcome \t $holder[0]");
   header("Location:welcome.php");
}else{
  // echo "Failed Login";
 
}
?>