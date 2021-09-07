<?php
// function verify ($regNo,$password)
$regNo = $_POST['regNologin'];
$password = $_POST['passwordlogin'];
$success = false;
$username ="";
$studentDb = file("studentDb.txt");
foreach($studentDb as $logininfo){
  $studentDetails = explode('~',$logininfo);
  if($studentDetails[1] == $regNo && $studentDetails[6] == $password){
    $success = true;
     $username = $studentDetails[0];
     break;
  }
}
if($success = true){
  echo "Welcome \t $username";
}else{
  echo "failed Login";
}
?>