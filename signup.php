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
 
 header("Location:index.php");
    }else{
      echo "fill the form with your details";
    }}
    else{
      echo "File Missing";
    }
  







  


?>