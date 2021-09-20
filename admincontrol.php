<?php
include ("config.php");
session_start();
// require_once("index.php");
date_default_timezone_set("Africa/Nairobi");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Database Control</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\font-awesome-4.7.0\css/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <style>
      @media (max-width :700px){
      body{
      font-size :10px;
     font-weight: 50;
     max-width: 100%;
     flex-direction: column;
     width: fit-content;

    }
    .card-text{
      font-size: 10px;
      font-weight: 50;
           }
    .card-title{
      text-align: center;
      text-decoration: bold;
      font-size: 12px;
    }
    .card.shadow-sm{
      max-width: 100%;
    }
    }
  </style>
    <link rel="canonical" href="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\dashboard">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\assets\dist\css\bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\dashboard\dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Maseno University
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Log out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
             Student Report
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Year I
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Year II
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Year III
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Year IV
            </a>
          </li>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last Year
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Academics
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Accomodattion
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
         <div class="btn-toolbar mb-2 mb-md-0">
        
        </div>
      </div> 

      <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Database</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm  table-dark table-hover">
          <thead>
            <tr>
              
              <th scope="col">ID</th>
              <th scope="col">UserName</th>
              <th scope="col">RegNO.</th>
              <th scope="col">Age</th>
              <th scope="col">Course</th>
              <th scope="col">Gender</th> 
               <th scope="col">Email</th>
               <th scope="col">Phone</th>
               <th scope="col">Image</th>
               <th scope="col">Edit</th>
               <th scope="col">Remove</th>
            </tr>
          </thead>
          <tbody>
          <?php
$res=mysqli_query($conn,"SELECT * FROM `students`");
while ($row=mysqli_fetch_array($res)){
    $image="userimg/".$row['image'];
echo "<tr>";
echo "<td>";echo $row ["id"];echo "</td>";
echo "<td>";echo $row ["username"];echo "</td>";
echo "<td>";echo $row ["regNo"];echo "</td>";
echo "<td>";echo $row ["age"];echo "</td>";
echo "<td>";echo $row ["course"];echo "</td>";
echo "<td>";echo $row ["gender"];echo "</td>";
echo "<td>";echo $row ["email"];echo "</td>";
echo "<td>";echo $row ["phone"];echo "</td>";
echo "<td>"; echo "<img src='$image' . height='90' width='90'";echo"</td>";;
echo "<td>";?><a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="submit" class="btn btn-success" name="edit" value="edit">Edit</button></a><?php echo "</td>";
echo "<td>";?><a href="deregister.php?id=<?php echo $row["id"]; ?>"><button type="submit" class="btn btn-danger" name="deregister" value="remove">Remove</button></a><?php echo "</td>";
echo "</tr>";
}
?>

          </tbody>
        </table>
        <section>
        
        <div class="col-md-6" >
        <form id="signUp" method="POST" action="sign.php" enctype="multipart/form-data">
                  <h1 class="text-center title">
                    <b> Register</b>
                  </h1>
                  
                  <div class="mb-3">
                    <label for="userName">Username</label>
                    <input type="text" class="form-control" id="userName" name="username"/>
                  </div>

                  <div class="mb-3">
                    <label for="regNo">Registration Number</label>
                    <input type="text" class="form-control" id="regNo" name="regNo"/>
                  </div>

                  <div class="mb-3">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender"/>
                  </div>

                  <div class="mb-3">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age"/>
                  </div>

                  <div class="mb-3">
                    <label for="course">Course</label>
                    <select class="form-control" id="course" name="course" >
                    <option value="" disabled selected>--select A course--</option>
                          <option value="BSc. Computer Science">BSc. Computer Science</option>
                        <option value="BSc. Computer Technology">BSc. Computer Technology</option>
                        <option value="BSc. Internet Technology">BSc. Internet Technology</option>
                           <option value="BSc. Computer Informatics">BSc. Computer Informatics</option>
                           <option value="BSc. Software Engineering">BSc. Software Engineering</option>
                           <option value="BSc. Machine Computing">BSc. Machine Computing</option>
                    </select>
                  </div>



                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                      >Email address</label>
                    <input
                      type="email"
                      class="form-control"
                      id="exampleInputEmail1"
                      aria-describedby="emailHelp"
                      required
                      name="email"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone"/>
                  </div>
                  <div class="mb-3">
                     <label for="profile">Profile Picture</label>
                    <p>Select an image less than 2MB with (.jpeg , .jpg, .png extension)</p>
                    <input type="file" class="form-control" id="image" name="image"/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"
                      >Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="exampleInputPassword1"
                      name="password"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"
                      >Confirm Password</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="exampleInputPassword1"
                      name="confirmpassword"
                      required
                    />
                  </div>

  
  <button type="submit" class="btn btn-success" name="insert" value="insert">Insert</button>
        <button type="submit" class="btn btn-danger" name="delete" value="delete">Remove</button> 
        <button type="submit" class="btn btn-info" name="update" value="update">Update</button>       
</form>
       
     
<?php
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
                  $sql = "INSERT INTO students (username,regNo,gender,age,course,email,password,image,phone,time)
                 VALUES ('$username','$regNo','$gender','$age','$course','$email','$password','$new_image_name','$phone','$time')";

                 
               
                   if ($conn->query($sql) === TRUE) {
                     file_put_contents("stud.json", $finalContents );
                     fclose($fh); 
                     header("Location: admincontrol.php");

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


  
      </section>
      <section>

      <div class="table-responsive">
      <form action="" method="post" enctype="multipart/form-data">
      <table class="table table-striped table-sm">
        <center><span>Not sure the use of this</span></center>
      <thead>
            <tr>
              
              <th scope="col">ID</th>
              <th scope="col">Username</th>
              <th scope="col">RegNo.</th>
              <th scope="col">Image</th>
              <th scope="col"> Phone Number</th> 
               <!-- <th scope="col">Accept</th>  -->
              <th scope="col">Deny</th>

            </tr> 
          </thead>
          <?php 
          require_once "config.php";
          $sql="SELECT * FROM `students` ";
          $sql_run=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($sql_run))
          {
            $image="userimg/".$row['image'];
           
            ?>
           
            <tr>
            
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['regNo'];?></td>
            <td><?php echo "<img src='$image' .  height='90' width='90'";?></td>
           
              <td><?php echo $row['phone'];?></td>
              <td><a href="deny.php?id=<?php echo $row["id"]; ?>"><button type="submit" class="btn btn-danger" name="remove" value="add">Deny</button></a></td>;
            </tr>
           
            <?php
          }
          ?>
      </table>
      </form>
      </div>
      </section>
    </main>
  </div>
</div>

    <script src="bootstrap-5.0.2\bootstrap-5.0.2\dist\js\bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\dashboard\dashboard.js"></script>
  </body>
 
</html>
