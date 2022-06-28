<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>

<h1> LOGIN </h1>

<form action="login_action.php" method="post">
  <label> Enter Username: </label>
  <input type="text" name="user_name"><br><br>

  <label> Enter Password: </label>
  <input type="Password" name="user_pword"><br><br>

  <input type="submit" value="Login"/>

</form>

</body>
</html>