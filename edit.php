<?php
 include "config.php";
if(isset($_GET['edit'])){
$id=$_GET['id'];
$qry=mysqli_query($conn,"SELECT * FROM students WHERE id=$id");//select query
$data=mysqli_fetch_array($qry);
if(isset($_GET['update'])){
$username=$_GET['username'];
$regNo=$_GET['regNo'];
$gender=$_GET['gender'];
$course=$_GET['course'];
$edit=mysqli_query($conn, "UPDATE students SET username='$username', regNo='$regNo',gender='$gender',age='$age',course='$course',email='$email',password ='$password',image='$image',phone='$phone', WHERE id=$id ");
while($row=mysqli_fetch_array($edit)){
      $car_Name=$row["car_Name"];
      $fuel=$row["fuel"];
      $cost=$row["cost"];
      $Numbers=$row["Numbers"];
}
}
}
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
        <button type="submit" class="btn btn-info" name="update" value="Cancel"><a href="admincontrol.php" style="text-decoration: none; font-family: sans-serif;">Cancel</a></button>
        </center>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>