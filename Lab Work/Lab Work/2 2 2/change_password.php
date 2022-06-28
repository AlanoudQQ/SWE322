<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
</head>
<body>

<h1> Change Password </h1>

<form action="change_password.php" method="post">
  <label> Enter Old Password: </label>
  <input type="Password" name="old_pwd"><br><br>

  <label> Enter New Password: </label>
  <input type="Password" name="new_pwd"><br><br>

  <input type="submit" value="submit" name="change_pwd"/>

</form>


<?php
  include('db_config.php');

  // if form is submitted
  if (isset($_POST['change_pwd'])){

    $id = $_SESSION['id']; 
    $oldPW = $_POST['old_pwd'];
    $newPW = $_POST['new_pwd'];

    // find user id in database with matching user id stored in session 
    $query = "SELECT * from user_accounts WHERE u_id = '$id'";
    $result = mysqli_query($conn, $query);
    $result_row = mysqli_fetch_row($result); // get result row as an array

    // verify there is a user id and hashed password is the same in database
    if(mysqli_num_rows($result) > 0 && $oldPW == $result_row[3] ) {

      $query2 = "UPDATE user_accounts SET password = '$newPW' WHERE u_id = '$id'";

      // perform the query above
      mysqli_query($conn, $query2);
      echo "<h3> Password Changed</h3>";

    }else{
      echo "<h3> Wrong Password</h3>";
    }


  }

?>

</body>
</html>