<?php
  $username= $_POST['username'];
  $regNo= $_POST['regNo'];
  $gender= $_POST['gender'];
  $age= $_POST['age'];
  $course= $_POST['course'];
  $email= $_POST['email'];
  $password= $_POST['password'];


$studentDb = "studentDB.txt";
$exists = file_exists("studentDB.txt");


  if(($username||$regNo ||$gender||$age||$course||$email||$password) !== null){

  $studentDetails= array($username,$regNo,$gender,$age,$course,$email,$password);


    if($exists){
      $openFile =fopen($studentDb,"a");
      fwrite($openFile,nl2br(json_encode($studentDetails)));
      fclose($openFile);
     echo "Hello";
    }else{
      echo "file does not exist";
    }
}








  


?>