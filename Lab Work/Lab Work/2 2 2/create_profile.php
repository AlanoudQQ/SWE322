<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile Creation</title>
  <script src="validate_input.js"></script> 
</head>
<body>
  <h1> Profile Creation </h1>

  <form action="create_profile.php" method="post">
    <label>Enter First Name: </label> 
    <input type="text" name="first_name"> <br><br>

    <label>Enter Last Name:  </label> 
    <input type="text" name="last_name"> <br><br>

    <label>Enter Phone:  </label> 
    <input type="text" name="contact_phone"> <br><br>

    <label>Enter Email:  </label> 
    <input type="text" name="contact_email"> <br><br>

    <label>Enter City:  </label> 
    <input type="text" name="city"> <br><br>

    <label>Enter Country:  </label> 
    <input type="text" name="country"> <br><br>

    <input type="submit" value="Submit" name="profile"/>
  </form>
</body>
</html>

<?php
include('db_config.php');

  $id = $_SESSION['id'];

  // executed only when the above form is submitted
  if (isset($_POST['profile'])) {

    $id = $_SESSION['id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $phone = $_POST['contact_phone'];
    $email = $_POST['contact_email'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    // find ttable where there is u_id similar to the $id in page and add the rest of data to that row
    add_user($conn, $id, $fname, $lname, $phone, $email, $city, $country);
  }

  // insert into table "profile"
  function add_user($conn, $id, $fn, $ln, $cp, $ce, $ct, $ctr){
      $stmt = $conn->prepare('INSERT INTO profile (u_id, first_name, last_name, contact_phone, contact_email, city, country) VALUES(?,?,?,?,?,?,?)');
      $stmt->bind_param('sssssss', $id, $fn, $ln, $cp, $ce, $ct, $ctr);
      $stmt->execute();
      $stmt->close();

      echo "<h1> Data added Successfully</h1>";
      Die ("click on this <a href='profile.php'> link </a> to see profile");

  }

?>
