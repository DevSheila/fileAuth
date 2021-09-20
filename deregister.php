<?php
include "config.php";
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM students WHERE id=$id");
?>
<script type="text/javascript">
window.location="admincontrol.php";
</script>



$username= $regNo=  $gender= $age=$course= $email= $phone= $password=$confirmpassword= "";
  $image="";
 if (isset($_POST['insert'])) {
  $username= $_POST['username'];
  $regNo= $_POST['regNo'];
  $gender= $_POST['gender'];
  $age= $_POST['age'];
  $course= $_POST['course'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['password'];
  $confirmpassword= $_POST['confirmpassword'];
  $image = $_FILE['image'];

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
  }