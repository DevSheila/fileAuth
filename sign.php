<?php
include("config.php");
session_start();
date_default_timezone_set("Africa/Nairobi");
  $username= $_POST['username'];
  $regNo= $_POST['regNo'];
  $gender= $_POST['gender'];
  $age= $_POST['age'];
  $course= $_POST['course'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['password'];
  $confirmpassword= $_POST['confirmpassword'];
  $image = $_FILE['images'];

  $studentDb = "stud.json";
  // $lines = file("stud.json");
  $search=']';
  $exists = file_exists("stud.json");
 if($exists){
  if(($username||$regNo ||$gender||$age||$course||$image||$email||$password) !== null){

    //image file validation
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $time = time();
      $new_image_name = $time."_".$file_name;
      $extensions= array("jpeg","jpg","png");
      //check if image file is of  a valid  extension
            if(in_array($file_ext,$extensions)=== false){
              $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          
          if($file_size > 2097152){
              $errors[]='File size must be excatly 2 MB';
          }
     
        if(empty($errors)==true){
          $image_dir = "userimg";
          //for session
          $image_session = "$image_dir/$new_image_name";
            move_uploaded_file($file_tmp,"$image_dir/$new_image_name");//.".".$img_ext)
            // echo "Success";
            // print_r($new_image_name);
            $date = date("l jS \of F Y h:i:s A");
            $_SESSION['regNo'] =$regNo;
            $_SESSION['password'] =$password;
            $_SESSION['image'] = $_FILES["image"]["name"];
        
              $studentData =array("username" =>$username,"regNo"=>$regNo,"gender"=>$gender,"age"=>$age,"course"=>$course,"email"=>$email,"password"=>$password,"Image"=>$new_image_name,"phone"=>$phone,"time"=>$date);
                  $holder=",".json_encode($studentData)."\n"."]";
              $fh = fopen("stud.json","a");
              $contents=file_get_contents("stud.json");
              $finalContents=str_replace(']',$holder,$contents);
                      // Check connection
              if (!$conn ||mysqli_connect_errno()) {
                echo("Connection failed: " . mysqli_connect_error());
              }else{
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                  // username and password sent from form 
                  // $myusername = mysqli_real_escape_string($conn,$_POST['username']);
                  // $myemail= mysqli_real_escape_string($conn,$_POST['email']);
                  // $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
                  // if(empty(trim($_POST['username'],$_POST['regNO'],$_POST['gender'],$_POST['age'],$_POST['course'],$_POST['email'],$_POST['phone'],$_POST['password'],$_POST['confirmpassword']))){
                  //   $empty_error="No field in this form is to be left empty";
                    
                  // }elseif(preg_match('/^[azA-Z0-9_]+$/',trim($_POST['username']))){
                  //   $username_error = "username should have letters,numbers and underscores only.";
                  //   }elseif (preg_match('/^[azA-Z0-9_]+$/',trim($_POST['regNO']))) {
                  //    $regNO_error="Regestration Number should have letters,numbers and underscores only.";
                  //   }elseif (strlen(trim($_POST['password']))< 5) {
                  //     $password_error = "Enter A password with 5 - 10 characters no less.";
                  //   }elseif  (strlen(trim($_POST['password'])) > 10 ) {
                  //     $password_error = "Enter A password with 5 - 10 characters no more.";
                  //   }elseif(trim($_POST['password'])!=trim($_POST['confirmpassword'])){
                  //     $password_error = "The two passwords does not match";
                  //   }elseif(trim($_POST['age'])<17){
                  //    $age_error = "You must be at least 17 years to sign up";
                  //   }
                  //   elseif(!filter_var(trim($_POST['email'],FILTER_VALIDATE_EMAIL))){
                  //     $email_error = "invalid email";
                  //   }else{}
                    

                  $sql = "INSERT INTO students (username,regNo,gender,age,course,email,password,image,phone,time)
                  VALUES ('$username','$regNo','$gender','$age','$course','$email','$password','$new_image_name','$phone','$time')";

                  
                
                    if ($conn->query($sql) === TRUE) {
                      file_put_contents("stud.json", $finalContents );
                      fclose($fh); 
                      header("Location: profile.php");

                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    
                    $conn->close();
                  }
                }
             
        }else{
            print_r($errors);
          
        }

  }else{
      echo "fill the form with your details";
    }}
    else{
      echo "File Missing";
    }
  
?>
