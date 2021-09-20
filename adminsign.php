<?php
include("config.php");
session_start();
date_default_timezone_set("Africa/Nairobi");
  $username= $_POST['username'];
  $depIDlogin= $_POST['depIDlogin'];
  $school= $_POST['school'];
  $gender= $_POST['gender'];
  $age= $_POST['age'];
 
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['password'];
  $confirmpassword= $_POST['confirmpassword'];
  $image = $_FILE['images'];

  $adminDb = "admin.json";
  
  $search=']';
  $exists = file_exists("admin.json");
 if($exists){
  if(($username||$depIDlogin ||$school||$gender||$age||$email||$image||$password) !== null){

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
          
          $image_session = "$image_dir/$new_image_name";
            move_uploaded_file($file_tmp,"$image_dir/$new_image_name");
            $date = date("l jS \of F Y h:i:s A");
            $_SESSION['depIDlogin'] =$depIDlogin;
            $_SESSION['password'] =$password;
            $_SESSION['image'] = $_FILES["image"]["name"];
        
              $adminData =array("username" =>$username,"depIDlogin"=>$depIDlogin,"school"=>$school,"gender"=>$gender,"age"=>$age,"email"=>$email,"password"=>$password,"Image"=>$new_image_name,"phone"=>$phone,"time"=>$date);
                  $holder=",".json_encode($adminData)."\n"."]";
              $fh = fopen("admin.json","a");
              $contents=file_get_contents("admin.json");
              $finalContents=str_replace(']',$holder,$contents);
                      // Check connection
              if (!$conn ||mysqli_connect_errno()) {
                echo("Connection failed: " . mysqli_connect_error());
              }else{
                if($_SERVER["REQUEST_METHOD"] == "POST") {                  

                  $sql = "INSERT INTO admin(username, depIDlogin, school,gender,age, email, phone, password, image,time) VALUES ('$username','$depIDlogin','$school','$gender','$age','$email','$phone','$password','$new_image_name','$date')";

                  
                
                    if ($conn->query($sql) === TRUE) {
                      file_put_contents("admin.json", $finalContents );
                      fclose($fh); 
                      header("Location:adminprofile.php");

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
