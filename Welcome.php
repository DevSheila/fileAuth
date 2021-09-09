<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
require_once "login.php";
 $username=$_SESSION['username'];
$course=$_SESSION['course'];
$email=$_SESSION['email'];
 $gender=$_SESSION['gender'];
$age=$_SESSION['age'];
$phone=$_SESSION['phone']
// echo "Hello";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="cards.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.css">
        <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="font-awesome-4.7.0\fonts">
        <link rel="stylesheet" href="fonts">
        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
         <nav >
            
            <ul>
                
                <li><a href="#" data-toggle="modal">Subject</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Post Assignment</a></li>
                <li><a href="#">Ask Question</a></li>
                <li><a href="#">Post Document</a></li>
                <li><a href="#">Forums</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Student Details</button>
                        <div class="dropdown-content">
                          <a href="#"><?php echo "$course";?></a>
                          <a href="#"><?php echo "$gender";?></a>
                          <a href="#"><?php echo "$email";?></a>
                          <a href="#"><?php echo "$phone";?></a>
                        </div>
                      </div>
                </li>
                <li><a href="#"><?php echo "$username";?></a></li>
                <li><a href="#"></a></li>
                
                
                <li><a href=""><img src="images/nightking.jpg" alt=""></a></li> 
            
             
            </ul>
       
              <h1 style="font-family: monospace; color:blueviolet; text-align:center; font-size:23px bold;  ">Maseno University 🎓 &COPY;</h1>
         <div class="searchbar">
              <i  class="fa fa-search"></i> 
        <input  placeholder="" type="search"  >
       </div>
        </nav> 
    </div>
    <title>Maseno University.</title>
    
 

</head>
<body>

  <!-- Page content -->
 <section class="page-content">
 <p>
    Welcome to Learnmate an open forum aimed at providing answers to your student and professional 
    questions from other people on the platform helping you get a satisfying answer to your problem from a pool of like minded people
      You can get your assignment done today and meet the deadline with satsfying results.You can also use this forum as a 
      refrence point for questions and have a large repository of articles on your topics of interests.

    </p>
 
</section>
<section class="display-cards">
    <center><h1>HTML</h1></center>
    <p>Simple formatting of components in a webpage To create a webpage with content for display.</p>
    <div class="home-cards">
        <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="true" href="#" style="color:black; font-family:monospace;">Reference</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color:black; font-family:monospace;">Post Assignment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" aria-disabled="false" style="color:black; font-family:monospace;">Post Resource</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Learn HTML</h5>
              <p class="card-text">Learn HTML from Scratch and work youy way to frontend website development.</p>
              <a href="#" class="btn btn-danger">Begin HTML</a>
            </div>
          </div>
      
    </div>
</section>
<section class="display-cards">
    <center><h1>Cascading Styling-sheet (CSS)</h1></center>
    <p>Style components in a website page to give an attractive view to users.</p>
    <div class="home-cards">
        <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="true" href="#" style="color:black; font-family:monospace;">Reference</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color:black; font-family:monospace;">Post Assignment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" aria-disabled="false" style="color:black; font-family:monospace;">Post Resource</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Learn CSS</h5>
              <p class="card-text">Learn CSS and design an attractive website using different styles.</p>
              <a href="#" class="btn btn-info">Begin CSS</a>
            </div>
          </div>
      
    </div>
</section>
<section class="display-cards">
 <center><h1>Javascript</h1></center>
 <p>Learn Javascript for responsive websites.</p>
  <div class="home-cards">
      <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                  <!-- link to Javascript -->
                <a class="nav-link active" aria-current="true" href="#" style="color:black; font-family:monospace;">Reference</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:black; font-family:monospace;">Post Assignment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1" aria-disabled="false" style="color:black; font-family:monospace;">Post Resource</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <h5 class="card-title">Learn Javascript</h5>
            <p class="card-text">Together with HTML and CSS, Javascript is an ideal tool for your responsive webpage with 
                animation features making your website as possible.With Javascript as one of the most growing languages in 
              programming it is a must have.</p>
            <a href="#" class="btn btn-success">Begin Here</a>
          </div>
        </div>
    
  </div>
</section>
<section class="display-cards">
  <p>Learn Introduction To Programming </p>
  <center><h1>Learn Introduction To Programming.</h1></center>
  <div class="home-cards">
      <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                  <!-- link to Javascript -->
                <a class="nav-link active" aria-current="true" href="#" style="color:black; font-family:monospace;">Reference</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:black; font-family:monospace;">Post Assignment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1" aria-disabled="false" style="color:black; font-family:monospace;">Post Resource</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <h5 class="card-title">Learn Assembly Language </h5>
            <p class="card-text">Assembly Language helps most of electronic devices communicate as it is the closest language that 
              communicates with the machine directly.Learn operation codes from design models  like the Intel 8085 and their operational 
              details.
            </p>
            <a href="#" class="btn btn-success">Begin Here</a>
          </div>
        </div>
    
  </div>
</section>
<section class="display-cards">
    <p>Learn Assembly Language today</p>
    <center><h1>Assembly Language 👨‍💻</h1></center>
    <div class="home-cards">
        <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <!-- link to Javascript -->
                  <a class="nav-link active" aria-current="true" href="#" style="color:black; font-family:monospace;">Reference</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color:black; font-family:monospace;">Post Assignment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" aria-disabled="false" style="color:black; font-family:monospace;">Post Resource</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Learn Assembly Language </h5>
              <p class="card-text">Assembly Language helps most of electronic devices communicate as it is the closest language that 
                communicates with the machine directly.Learn operation codes from design models  like the Intel 8085 and their operational 
                details.
              </p>
              <a href="#" class="btn btn-success">Begin Here</a>
            </div>
          </div>
      
    </div>
</section>
<section class="display-cards">
    <p>Data communication, the transfer of information from one place to another with the use of networks laid in place.</p>
    <center><h1>Data Communcation 🛰</h1></center>
    <div class="home-cards">
        <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <!-- link to Data communication -->
                  <a class="nav-link active" aria-current="true" href="#" style="color:black; font-family:monospace;">Reference</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color:black; font-family:monospace;">Post Assignment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" aria-disabled="false" style="color:black; font-family:monospace;">Post Resource</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Learn Data Communications</h5>
              <p class="card-text">Learn Data Communication topics like network, network layout , Topology ,the Internet with guided approach
                  as directed by Computer Science course outline.</p>
              <a href="#" class="btn btn-success">Begin Here</a>
            </div>
          </div>
      
    </div>
</section>
<section class="footer">
    <footer>
      <p style="margin-top: 2px;">All Rights Reserved  &COPY; 2021</p><br>
      <p style="margin-top: 2px;">This is a student Website aimed at ensuring availability of resources for students and also proffesional</p><br>
      <span style="margin-top: 2px;">A Product of Maseno University,Kisumu Kenya.</span>

    </footer>
</section>
<style>
    body{
    background: url('images/wall2.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    font-family: sans-serif;
    font-size: 18px;
    box-sizing: border-box;
    text-align: center;
    
}
nav{
    flex-direction: row;
    background:blueviolet;
    /* margin:0; */
    /* padding: 2% 6%;  */
    justify-content: space-between;
    height: 85px;
    /* width: 100vw; */
  position:sticky; 

    
}

nav ul {
    box-shadow: none;
    text-decoration: none;
    width: 100%; 
     padding:15px;  
    display: flex;
    flex-direction: row;
    list-style: none;
    ;
}
nav ul li{
     padding-left: 30px;
    padding-right: 30px;
    
}
nav ul li a{
    text-decoration: none;
    color: #000;
}
/* Dropdown */
.dropbtn {
   outline: none;
   border: none;
   background-color: transparent; 
    color: #000;
    padding: 16px;
    font-size: 16px;
    border: none;
    font-size: 15px;
    padding-top: 0;
    /* font-weight: 200; */
    cursor: pointer;
    font-family: sans-serif;
    margin-top: 1px;
  }
  .dropdown {
    position: relative;
    display: inline-block;
    cursor: pointer;
    width: 200px;
    height:max-content;
  }
  /* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  /* Links in the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  /* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;
border-radius: 10px;
box-shadow: 5px slateblue;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
/* .dropdown:hover .dropbtn {} */

/* styling for the user profile picture */
nav ul li img{
    border-radius: 50%;
    height: 50px;
    width: 50px;
    /*try with  padding-right: 10px; or more wierd cool looking shape*/
    padding-right: 5px;
}
.searchbar{
   width: 800px;
   height: 20px;
   border-radius: 50px;
   display: flex;
   margin-left: 15%;
   background-color: #d9e3e5;
   align-items: center ; 
   padding:20px;
  
}

.searchbar i{
   font-size: 20px;
   color: rgb(121, 38, 38);
   cursor: pointer; 
}
.searchbar input{
    flex: 1;
    height:30px ;
    outline: none;
    border: none;
    font-size: 18px;
    padding-left: 10x;
    background-color: #d9e3e5;
}



/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
.page-content{
    margin-top: 150px; 
}
h5{
    text-decoration: underline;
}
.footer{
    background-color: darkviolet;
}

  /* On screens that are less than 700px wide, make the sidebar into a topbar */
  @media screen and (max-width: 700px) {
    body{
      align-items: center;
    }
      *{
          font-size: 15px;
         text-align: center; 
      }
      .searchbar{
          width: 290px;
          
      }
    section{
        width: 100%;
    }
  }
  
  /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
  @media screen and (max-width: 700px) {
     
  }
 
</style>
</body>
</html>