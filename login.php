<?php
// function verify ($regNo,$password){

// }


$studentDb = "studentDB.txt";
$exists = file_exists("studentDB.txt");
if($exists){
  $openFile =fopen($studentDb,"r");
  $fileContents= json_decode(file_get_contents($studentDb,true));
  echo $fileContents[0];

}else{
  echo 'file not found';
}

?>