<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GigYetu - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">GigYetu</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="#new" class="nav-item nav-link">New Listings</a>
                    <a href="#category" class="nav-item nav-link">Job Categories</a>
                    <a href="#about" class="nav-item nav-link">About us</a>
                    <!--<a href="benefits.html" class="nav-item nav-link">Benefits</a>
                    <a href="efficiency.html" class="nav-item nav-link">Efficiency</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.html" class="dropdown-item">Job List</a>
                            <a href="job-detail.html" class="dropdown-item">Job Detail</a>
                            <a href="category.html" class="dropdown-item">Job Category</a>
                        </div>
                    </div> 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="contact.html" class="dropdown-item">Contact</a>
                        </div>
                    </div> 
                    <a href="search.html" class="nav-item nav-link ">Search</a>-->
                    <a href="blog.html" class="nav-item nav-link ">Blog</a>
                    <button type="button" class="btn btn-secondary rounded-0 py-4 px-lg-5" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
                    <button type="button" class="btn btn-primary rounded-0 py-4 px-lg-5" data-bs-toggle="modal" data-bs-target="#registermodal">Register</button>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

         <!--Login Modal-->
        <!-- The Modal -->
        <div class="modal  " id="loginmodal">
                <div class="modal-dialog">
                <div class="modal-content">
            
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title text-secondary">Log into your Account</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
            
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container-xxl mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 10px;">
                            <h3 class="text-center text-secondary wow fadeInUp" data-wow-delay="0.1s">Login</h3>
                            <br>
                            <div class="container">
                                <form class="row g-3 needs-validation" data-wow-delay="0.1s" novalidate action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                    <div class="row-md-2">
                                      <label for="validationCustomUsername" data-wow-delay="0.1s" class="form-label">Email</label>
                                      <div class="input-group has-validation">
                                        <input type="email" data-wow-delay="0.1s" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                          Please choose valid Email address.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row-md-2">
                                        <label for="validationCustom01" data-wow-delay="0.1s" class="form-label">Password</label>
                                        <input type="password" data-wow-delay="0.1s" class="form-control" id="validationCustom01" value="Mark" required>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>
                                    <div class="col-12">
                                      <button class="btn btn-secondary" type="submit">Login</button>
                                    </div>
                                  </form>
                            </div>
                            <div class="text-center">
                                <span class="text-black wow fadeInUp" data-wow-delay="0.1s">Need an account ?</span>
                                <button type="button" class="btn btn-link rounded-0 py-4 px-lg-5" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registermodal">Register</button>
                            </div>
                        </div>
                    </div>
            
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
            
                </div>
                </div>
            </div>
          <!--End of login modal-->

          <?php
   require('./scripts/conn.php');
    if ( ($_SERVER["REQUEST_METHOD"] == "POST")) {
        $authclient_fname = stripslashes($_REQUEST['fname']);
        $authclient_fname = mysqli_real_escape_string($con, $authclient_fname);
        $authclient_lname = stripslashes($_REQUEST['lname']);
        $authclient_lname = mysqli_real_escape_string($con, $authclient_lname);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $authclient_password = stripslashes($_REQUEST['pwd']);
        $authclient_confpassword = stripslashes($_REQUEST['confpwd']);
        $authclient_password = mysqli_real_escape_string($con, $authclient_password);
        $authclient_confpassword = mysqli_real_escape_string($con, $authclient_confpassword);
        $authclient_role = stripslashes($_REQUEST['role']);
        $authclient_role = mysqli_real_escape_string($_REQUEST['role']);
        $authclient_contact = stripslashes($_REQUEST['contact']);
        $authclient_contact = mysqli_real_escape_string($_REQUEST['contact']);
        $member_created_at = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (fname, lname, email, pwd, role, phone, regdate)
                     VALUES ('$authclient_fname','$authclient_lname','$mail', '" . md5($authclient_confpassword) . "', '$authclientrole','$authclient_contact', '$member_created_at')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='signin.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
       <!--Register Modal-->
       <div class="modal" id="registermodal">
            <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title text-primary">Sign Up for an account</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container-xxl mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 10px;">
                        <h3 class="text-center text-primary wow fadeInUp" data-wow-delay="0.1s">Register</h3>
                        <br>
                        <div class="container">
                            <form class="row g-3 needs-validation" data-wow-delay="0.1s" novalidate id = "regform">
                                <div class="col-md-6" id = "fname-group">
                                  <label for="fname" data-wow-delay="0.1s"class="form-label">First name</label>
                                  <input type="text"data-wow-delay="0.1s" name = fname class="form-control" id="fname" required>
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                </div>
                                <div class="col-md-6"id = "lname-group">
                                  <label for="lname" data-wow-delay="0.1s" class="form-label">Last name</label>
                                  <input type="text" class="form-control" name = "lname" data-wow-delay="0.1s" id="lname" required>
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                </div>
                                <div class="row-md-2" id = "email-group">
                                  <label for="email" data-wow-delay="0.1s" class="form-label">Email</label>
                                  <div class="input-group has-validation">
                                    <input type="email" data-wow-delay="0.1s" class="form-control" name = "email" id="email" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                      Please choose valid Email address.
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6" id = "pwd-group">
                                    <label for="pwd" data-wow-delay="0.1s" class="form-label">Password</label>
                                    <input type="password" data-wow-delay="0.1s" name = "pwd"class="form-control" id="pwd"  required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                  </div>
                                  <div class="col-md-6" id = "confpwd-group">
                                    <label for="confpwd" data-wow-delay="0.1s" class="form-label">Confirm Password</label>
                                    <input type="password" data-wow-delay="0.1s" name = "confpwd" class="form-control" id="confpwd"  required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                  </div>
                                <div class="col-md-6" id = "role-group">
                                  <label for="role" class="form-label">Register as a:</label>
                                  <select class="form-select" data-wow-delay="0.1s" name = "role" id="role" required>
                                    <option selected value="employee">Job Seeker</option>
                                    <option value="employer">Employer</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please select a valid state.
                                  </div>
                                </div>
                                <div class="col-md-6" id = "contact-group">
                                  <label for="contact" class="form-label">Phone Number</label>
                                  <input type="tel" class="form-control" name = "contact" placeholder="e.g. 254700000000" minlength="12" maxlength="12" id="contact" required>
                                  <div class="invalid-feedback">
                                    Please provide a valid contact.
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-check"id = "check-group">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                      Agree to terms and conditions
                                    </label>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <button class="btn btn-primary" type="submit">Register</button>
                                </div>
                              </form>
                        </div>
                        <div class="text-center">
                            <span class="text-black wow fadeInUp" data-wow-delay="0.1s">Already have an account ?</span>
                            <button type="button" class="btn btn-link rounded-0 py-4 px-lg-5" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
                        </div>
                    </div>
                </div>
        
                <!-- Modal footer 
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>-->
        
            </div>
            </div>
        </div>
      <!--End of register modal-->
    <!-- <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="authclient_name" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="authclient_password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="signin.php">Click to Login</a></p>-->
<?php
    }
?>

       