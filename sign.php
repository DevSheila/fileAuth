<?php
session_start();
  $username= $_POST['username'];
  $regNo= $_POST['regNo'];
  $gender= $_POST['gender'];
  $age= $_POST['age'];
  $course= $_POST['course'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['password'];


$studentDb = "stud.json";
// $lines = file("stud.json");
$search=']';

$exists = file_exists("stud.json");
 if($exists){
  if(($username||$regNo ||$gender||$age||$course||$email||$password) !== null){
    $date = date("Y/m/d/h:i:sa");
    $_SESSION['regNo'] =$regNo;
    $_SESSION['password'] =$password;

    $studentData =array("username" =>$username,"regNo"=>$regNo,"gender"=>$gender,"age"=>$age,"course"=>$course,"email"=>$email,"password"=>$password,"phone"=>$phone,"time"=>$date);
    $holder=",".json_encode($studentData)."\n"."]";





 $fh = fopen("stud.json","a");
 $contents=file_get_contents("stud.json");
// echo $contents;


$finalContents=str_replace(']',$holder,$contents);
file_put_contents("stud.json", $finalContents );

 fclose($fh); 
 header("Location: profile.php");
 
    }else{
      echo "fill the form with your details";
    }}
    else{
      echo "File Missing";
    }
  







  


?>