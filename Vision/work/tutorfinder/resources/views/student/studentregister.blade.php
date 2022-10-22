<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href="./images/logo/headlogo.png"
        type = "image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('./mycss.css')}}">
    <title>Student Register</title>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/studentcreate" method="POST">

              @csrf
              
                <h3>Regstration Form</h3>
                <h5 style="color: #36a3f7;">You are Register as a Student</h5>
      

                <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="firstname" class="form-control" placeholder="First Name" required>
   
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6 mb-3">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="lastname" class="form-control" placeholder="Last Name" required>

                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-3">
                          <input type="text" id="subject" name="email" class="form-control" placeholder="Email" required>
                       
                      </div>
                  </div>
              </div>
              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-3">
                        <input type="number" id="subject" name="phoneno" class="form-control" placeholder="Phone No." required>
                     
                    </div>
                </div>
            </div>
            <!--Grid row-->
            <div class="row">
              <div class="col-md-12">
                  <div class="md-form mb-3">
                      <input type="password" id="subject" name="password" class="form-control" placeholder="Password" required>
                   
                  </div>
              </div>
          </div>
          <!--Grid row-->
          <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-3">
                    <input type="password" id="subject" name="repeat_password" class="form-control" placeholder="Repeat Password" required>
                 
                </div>
            </div>
</div>

                
                <!-- Email input -->
               
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <input type="submit" class="btnlogin" value="Regsiter">
                  <p class="small fw-bold mt-2 pt-1 mb-0">Already have an Account <a href="/studentlogin"
                      class="link-danger">Login</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
       </section>
</body>
</html>