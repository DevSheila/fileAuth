<?php
 include "config.php";
$id=$_REQUEST['id'];
$qry=mysqli_query($conn,"SELECT * FROM students WHERE id='$id'") or die(mysqli_error($conn));//select query
$data=mysqli_fetch_assoc($qry);

      $username=$data["username"];
      $regNo=$data["regNo"];
      $course=$data["course"];
      $age=$data["age"];
      $email=$data["email"];
      $phone=$data["phone"];
      $age=$data["age"];
    //   $image_URL=$row['image'];

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\font-awesome-4.7.0\css/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Update Record</title>
    
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <center><h2 class="mt-5">Update Record</h2></center>
                    <p>Please edit the input details you need to change in the database .</p>
                    <form action="edit.php" method="get">
                        <div class="form-group">
                            <center><label class="form-control" >Username</label></center>
                            <input type="text"  name="car_Name" class="form-control " value="<?php echo $username; ?>">
                            
                        </div>
                        <div class="form-group">
                            <center><label class="form-control" >Regestration Number</label></center>
                            <input name="fuel" class="form-control" value="<?php echo $regNo; ?>"></input>
                           
                        </div>
                        <div class="form-group">
                           <center><label class="form-control">course</label></center>
                            <input type="text" name="cost" class="form-control " value="<?php echo $course; ?>">
                           
                        </div>
                        <div class="form-group">
                            <center><label class="form-control">age</label></center>
                            <input name="Numbers" class="form-control " value="<?php echo $age; ?>"></input>
                                                    </div>
                                                    <div class="form-group">
                           <center><label class="form-control">email</label></center>
                            <input type="text" name="cost" class="form-control " value="<?php echo $email; ?>">
                           
                        </div>
                        <div class="form-group">
                           <center><label class="form-control">phone</label></center>
                            <input type="text" name="cost" class="form-control " value="<?php echo $phone; ?>">
                           
                        </div>
                       <center>
                        <button type="submit" class="btn btn-danger" name="submit" value="delete">Submit</button> 
        <button type="submit" class="btn btn-info" name="cancel" value="Cancel"><a href="admincontrol.php" style="text-decoration: none; font-family: sans-serif;">Cancel</a></button>
        </center>
                    </form>
                    <?php
                    
    if(isset($_POST['submit'])){
        $username=$_POST["username"];
        $regNo=$_POST["regNo"];
        $course=$_POST["course"];
        $age=$_POST["age"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $age=$_POST["age"];

        $update="UPDATE stusents SET (username,regNo,course,age,email,phone) VALUES
        ('$username','$regNo','$course','$age','$email','$phone')";
        mysqli_query($conn, $update) or die(mysqli_error($conn));
        $status = "Student Record Updated Successfully. </br></br>
<a href='admincontrol.php'>View Updated Record</a>";
echo '<p>'.$status.'</p>';
    }else{
        echo "error";
    }
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>