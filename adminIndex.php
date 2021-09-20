<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator Portal</title>
    <link rel="stylesheet" href="css/index.css"  type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all"/>

    <link rel="stylesheet" href="./script.js">
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>



</head>
<body>

    <div class="container">
      <div class="form-container mt-3 pt-5">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
          <form id="signIn"  method="POST" action="adminlog.php" enctype="multipart/form-data">
          <h1 class="text-center title">
           ADMINISTRATOR PORTAL 
          </h1>
          <h1 class="text-center title">
            <u>Login</u>
          </h1>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Department ID</label>
            <input
              type="name"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              name="depIDlogin"
              required
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              name="passwordlogin"
              required
            />
          </div>
          <div class="mb-3 forgot-password">
            <span class="link">forgot password?</span>
          </div>

          <div class="d-flex justify-content-center">
                    <button  type="submit" class="btn btn-dark" id="log-btn" >Login</button>
                  </div>

          <p class="text-center m-3">or</p>

          <!-- 
          <div class="icons m-4">
            <img src="./img/icons/facebook (1).png" alt="" />
            <img src="./img/icons/twitter.png" alt="" />
            <img src="./img/icons/google-plus.png" alt=""/>
          </div> -->

          <p class="text-center">
            Dont have an account?
            <span class="link sign-up"> Sign up here</span>
          </p>
        </form>
          </div>
        </div>
       
   

                <form id="signUp" method="POST" action="adminsign.php" enctype="multipart/form-data">
                  <h1 class="text-center title">
                    <b> Register</b>
                  </h1>
                  <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username"/>
                  </div>
              
                  <div class="mb-3">
                    <label for="depIDlogin">Department ID</label>
                    <input type="text" class="form-control" id="depIDlogin" name="depIDlogin"/>
                  </div>

            
                  <div class="mb-3">
                    <label for="school">School</label>
                    <input type="text" class="form-control" id="school" name="school"/>
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

                  <div class="d-flex justify-content-center">
                    <button  type="submit" class="btn btn-dark" id="log-btn" >Sign Up</button>
                  
                  </div>

      

                  <p class="text-center">
                    Have an account? <span class="link sign-in"> Sign in here</span>
                  </p>
                </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/contentful@latest/dist/contentful.browser.min.js"></script>
    <script src="./js/index.js"></script>
  </body>
  
</html>