<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
      session_start();
      
      //check if user logged in display profile settings and change password page, if not display login and register page
      if (isset($_SESSION['id'])) {
        echo "<a href='profile.php'> Profile Settings </a> <br>";
        echo "<a href='change_password.php'> Change Password </a> <br>";
        echo "<a href='logout.php' > Logout </a> <br>";
      }else{
        echo "<a href='login.php'>Login</a> <br>";
        echo "<a href='reg.php'>Register</a> <br>";
      }
    ?>
</div>
</body>
</html>