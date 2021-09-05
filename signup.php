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

  $studentDetails= array("{",$username,",",$regNo,",",$gender,",",$age,",",$course,",",$email,",",$password,"}","\n");
  $holder=file_put_contents($studentDb,implode("",$studentDetails));


    if($exists){
      $openFile =fopen($studentDb,"a");
      fwrite($openFile,$holder);
      fclose($openFile);
     echo "Hello";
    }else{
      echo "file does not exist";
    }
    // nl2br(json_encode() )
}








  


?>