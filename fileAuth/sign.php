<?php
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

    $studentData =array("username" =>$username,"regNo"=>$regNo,"gender"=>$gender,"age"=>$age,"course"=>$course,"email"=>$email,"password"=>$password,"phone"=>$phone);
    $holder=",".json_encode($studentData)."]";

    //#########################SOLUTION2########
    // $reading = fopen('stud.json', 'r');
    // $writing = fopen('stud.json', 'a');
    // $replaced = false;
    // $marked= true;
    
    // while (!feof($reading) && $marked) {
    //   $line = fgets($reading);
    //   if (stristr($line,']')) {
    //     $line = $holder;
    //     $replaced = true;
    //     $marked=false;
    //   }
    //   fputs($writing, $line);
    // }

    // fclose($reading);

    //  fclose($writing);

    //  if ($replaced){
    //     // rename('stud.json', 'stud');
    //     echo "replaced";
    //   } else {
    //     // unlink('stud.json');
    //     echo "not replaced";
    //   }
     //#########################END OF SOLUTION2########


 $fh = fopen("stud.json","a");
 $contents=file_get_contents("stud.json");
echo $contents;
// echo "yeey";


$finalContents=str_replace(']',$holder,$contents);
file_put_contents("stud.json", $finalContents );
//  fwrite($studentDb,$newData);
 fclose($fh); 
 
//  header("Location:index.php");
    }else{
      echo "fill the form with your details";
    }}
    else{
      echo "File Missing";
    }
  







  


?>