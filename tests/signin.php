<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('databaseconfig.php');
    session_start();
    // When form submitted, check and create client session.
    if (isset($_POST['authclient_name'])) {
        $authclient_name = stripslashes($_REQUEST['authclient_name']);    // removes backslashes
        $authclient_name = mysqli_real_escape_string($con, $authclient_name);
        $authclient_password = stripslashes($_REQUEST['authclient_password']);
        $authclient_password = mysqli_real_escape_string($con, $authclient_password);
        // Check client is exist in the database
        $query    = "SELECT * FROM `users` WHERE authclient_name='$authclient_name'
                     AND authclient_password='" . md5($authclient_password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['authclient_name'] = $authclient_name;
            // Redirect to client dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/authclient_password.</h3><br/>
                  <p class='link'>Click here to <a href='signin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="authclient_name" placeholder="Client Name" autofocus="true"/>
        <input type="password" class="login-input" name="authclient_password" placeholder="Enter your Secure Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>