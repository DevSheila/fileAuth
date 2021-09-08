<?php
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
    $success = true;
     $username = $studentDetails[0];
     $course =$studentDetails[4];
     $email = $studentDetails[5];
     $phoneno =$studentDetails[7];
     break;
  }
}
if($success){
  echo "Welcome \t $username";
}else{
  echo "failed Login";
}
?>