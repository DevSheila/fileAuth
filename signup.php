<?php
$username= $_POST['username'];
  $regNo= $_POST['regNo'];
  $gender= $_POST['gender'];
  $age= $_POST['age'];
  $course= $_POST['course'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['password'];
$studentDb = "studentDB.txt";
$exists = file_exists("studentDB.txt");
 if($exists){
  if(($username||$regNo ||$gender||$age||$course||$email||$password) !== null){
    $holder = $username."~".$regNo."~".$gender."~".$age."~".$course."~".$email."~".$password."~".$phone;
    // $timestamp = time();
 $studentDb = fopen($studentDb,"a");
 fwrite($studentDb,$holder."\n");
 fclose($studentDb); 
 $username = explode("~",$holder[0]);
 $course = explode("~",$holder[4]);
  $email = explode("~",$holder[6]);
 $phoneno = explode("~",$holder[7]);
 $_SESSION['username']= $username;
 $_SESSION['course']= $course;
 $_SESSION['email']= $email;
 $_SESSION['gender']= $gender;
 $_SESSION['age']= $age;

 header("Location:welcome.php");
    }else{
      echo "fill the form with your details";
    }}
    else{
      echo "File Missing";
    }
  







  


?>