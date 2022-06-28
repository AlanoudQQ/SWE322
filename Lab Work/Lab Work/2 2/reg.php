<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <h1> Registration </h1>

  <form action="reg_action.php" method="post">
    <label>Enter Username: </label> 
    <input type="text" name="user_name" > <br><br>

    <label>Enter Your Email:  </label> 
    <input type="text" name="email" > <br><br>

    <label>Enter Password: </label> 
    <input type="text" name="user_pword"> <br><br>

    <input type="submit" value="Submit"/>
  </form>
</body>
</html>

