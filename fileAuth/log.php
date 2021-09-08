<?php

$regNo= $_POST['regNologin'];
$password= $_POST['passwordlogin'];
$success = false;
$username ="";

$jsondata = file_get_contents("stud.json");
$json =json_decode($jsondata,true);



foreach($json['students'] as $student){
    if( ($student['regNo']==$regNo) && ($student['password']===$password)){
      echo "welcome to the student portal,".$student['username'];
    }
}

?>