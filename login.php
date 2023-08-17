<?php
require "header.php";
?>

        <!-- Login Starts -->
        <br><br>
        <div class="container-xxl bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 70px;">
            <h1 class="text-center text-white wow fadeInUp" data-wow-delay="0.1s">Login</h1>
            <br>
            <div class="container">
                <div class="col g-2">
                    <div class="row-md-2">
                        <div class="col g-2">
                            <div class="row-md-2">
                                <h4 class="text-white wow fadeInUp" data-wow-delay="0.1s">Username</h4>
                                <input type="text" class="form-control border-0" /><br>
                            </div>
                            <div class="row-md-2">
                                <h4 class="text-white wow fadeInUp" data-wow-delay="0.1s">Password</h4>
                                <input type="password" class="form-control border-0" /><br>
                                <span class="text-white wow fadeInUp" data-wow-delay="0.1s">Forgot Password ?</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <br>
            <div class="text-center">
                <a href="account.html" class="btn btn-secondary py-3 px-lg-5 animated fadeIn">Login</a>
            </div>
            <br>
            <div class="text-center">
                <span class="text-white wow fadeInUp" data-wow-delay="0.1s">Don't have an account ?</span>
                <a href="register.html" class="text-white">Register</a>
            </div>
        </div>
        <!-- login ends -->

<?php
require "footer.php";
?>