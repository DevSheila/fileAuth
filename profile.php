<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"type="text/css" media="all">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Press+Start+2P&display=swa" rel="stylesheet">

  <link rel="stylesheet" href="css/profile.css" type="text/css" />
  <link rel="stylesheet"href="css/bootstrap.css"type="text/css"media="all"/>
  <link rel="stylesheet" href="./script.js">

</head>
<body>

    <div class="container mt-5 ">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-1"></div>
        <div class="col-lg-10 col-md-10 col-10">
            <div class="row bg-dark p-5 profile-container-1" >
               
                <div class="col-lg-12 col-md-12 col-12 mb-5"> 
                    <?php
                        session_start();

                        if($_SESSION['regNo'] == null ||$_SESSION['password'] == null){
                            echo "<h1>Invalid user credentials,please try again!!</h1>";
                        }else{

                        
                    ?>
                        <table class="table table-dark">
                            <thead class="d-flex justify-content-center">
                                <tr>
                                    <th scope="col" class="">
                                        <h5> PROFILE</h5>
                                    </th>
                                </tr>
                            </thead>

                            <tbody >
                                <tr >
                                    <td class="d-flex justify-content-center">
                                      
                                        <h5 >
                                        
                                            <?php
                                               

                                                $jsondata = file_get_contents("stud.json");
                                                $json =json_decode($jsondata,true);

                                                if( isset($_SESSION['regNo']  ) ) {
                                                    $regNo =$_SESSION['regNo'];

                                                    foreach($json['students'] as $student){
                                                        if( ($student['regNo']==$regNo)){
                                                            $username =$student['username'];
                                                            $userimage =$student['Image'];
                                                           ?>
                                                            <span>  
                                                                <img  src="<?php echo "userimg/".$userimage;?>" class="img-fluid rounded-circle" alt="logo" style="height: 100px;width: 100px;"/>
                                                            </span>
                                                            <?php
                                                             echo "<h5><center> Username: $username </center></h5>";

                                                        }
                                                    }
                                              
                                                }
                                                    ?>

                                        
                                        </h5>
                                    </td>
                                </tr>
                                                                       
                                <?php
                                               
                                               $jsondata = file_get_contents("stud.json");
                                               $json =json_decode($jsondata,true);

                                               if( isset($_SESSION['regNo']  ) ) {
                                                   $regNo =$_SESSION['regNo'];

                                                   foreach($json['students'] as $student){
                                                       if( ($student['regNo']==$regNo)){
                                                        if($regNo == "compAdmin"){
                                                            ?>
                                                           
                                                           <?php 
                                                        }else{
                                                            
                                                            ?>
                                                            <tr>
                                                                <td class="d-flex justify-content-center">  
                                                                    <h5>
                                                                        <span>
                                                                            <img src="img/id-card.png "alt="logo" style="height: 50px;width: 50px;"/>
                                                                        </span>
                                                            <?php
                                                             
                                               
                                                            echo "<h5><center> Registration Number : $regNo</center></h5>";

                                                            ?>
                                                                    </h5>
                                                                </td>
                                                             </tr>
                                                            <?php
                                                            

                                                        }
                                                         
                                                       }
                                                   }
                                             
                                               }
                                                   ?>
                                         
                                            <?php
                                               
                                               $jsondata = file_get_contents("stud.json");
                                               $json =json_decode($jsondata,true);

                                               if( isset($_SESSION['regNo']  ) ) {
                                                   $regNo =$_SESSION['regNo'];

                                                   foreach($json['students'] as $student){
                                                       if( ($student['regNo']==$regNo)){
                                                        if($regNo == "compAdmin"){
                                                            ?>
                                                           
                                                           <?php 
                                                        }else{
                                                            
                                                            ?>
                                                            <tr>
                                                                <td class="d-flex justify-content-center">  
                                                                    <h5>
                                                                        <span>
                                                                            <img src="img/online-course.png "alt="logo" style="height: 50px;width: 50px;"/>
                                                                        </span>
                                                            <?php
                                                               $course =$student['course'];
                                               
                                                            echo "<h5><center> Course :$course </center></h5>";

                                                            ?>
                                                                    </h5>
                                                                </td>
                                                             </tr>
                                                            <?php
                                                            

                                                        }
                                                         
                                                       }
                                                   }
                                             
                                               }
                                                   ?>
                                
                            
                                <tr>
                                    <td class="d-flex justify-content-center">
                                        <h5>
                                            <span>
                                             
                                                <img src="img/open-email.png" alt="logo" style="height: 50px;width: 50px;"/>
                                            </span>
                                            <?php
                                               
                                               $jsondata = file_get_contents("stud.json");
                                               $json =json_decode($jsondata,true);

                                               if( isset($_SESSION['regNo']  ) ) {
                                                   $regNo =$_SESSION['regNo'];

                                                   foreach($json['students'] as $student){
                                                       if( ($student['regNo']==$regNo)){
                                                     
                                                           $email =$student['email'];
                                               
                                                           echo "<h5><center> Email :$email </center></h5>";
                                                       }
                                                   }
                                             
                                               }
                                                   ?>


                                        </h5>  
                                    </td>
                                </tr>

                                <tr>
                                    <td class="d-flex justify-content-center">
                                    <a type="button"  class="btn btn-primary m-2"href="logout.php">Log out</a>
                                    <?php
                                               
                                               $jsondata = file_get_contents("stud.json");
                                               $json =json_decode($jsondata,true);

                                               if( isset($_SESSION['regNo']  ) ) {
                                                   $regNo =$_SESSION['regNo'];

                                                   foreach($json['students'] as $student){
                                                       if( ($student['regNo']==$regNo)){
                                                         if($regNo == "compAdmin"){
                                                             ?>
                                                            <a type="button"  class="btn btn-success m-2"href="adminpdf.php">Student Details</a>
                                                            <?php 
                                                         }else{
                                                             ?>
                                                              <a type="button"  class="btn btn-success m-2"href="Details.php">Print</a>
                                                             <?php

                                                         }
                                                       }
                                                   }
                                             
                                               }
                                                   ?>
                                   
                                   

                                  
                                    </td>
                                   
                                </tr>

                            
                            </tbody>
                        </table> 
                        <?php }?> 
        </div> 
    </div>
           
        </div>
        <div class="col-lg-1 col-md-1 col-1"></div>

    </div>
</div> 
</body>
</html>
