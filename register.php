<?php
    require "header.php";
    ?> 

        <!-- Login Starts -->
        <br><br>
<?php
   require('./scripts/conn.php');
    if (isset($_REQUEST['authclient_name'])) {
        $authclient_name = stripslashes($_REQUEST['authclient_name']);
        $authclient_name = mysqli_real_escape_string($con, $authclient_name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $authclient_password = stripslashes($_REQUEST['authclient_password']);
        $authclient_password = mysqli_real_escape_string($con, $authclient_password);
        $member_created_at = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (authclient_name, authclient_password, email, member_created_at)
                     VALUES ('$authclient_name', '" . md5($authclient_password) . "', '$email', '$member_created_at')";
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
    
    <!-- <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="authclient_name" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="authclient_password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="signin.php">Click to Login</a></p>-->
<?php
    }
?>

<?php
require "footer.php";
?>