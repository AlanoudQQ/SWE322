<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Action</title>
</head>
  
<body>
<?php
    include('db_config.php');

    $uname = $_POST['user_name'];
    $pword = $_POST['user_pword'];

    // find user with matching uname and verify
    $query = "SELECT * from user_accounts WHERE user_name = '$uname'";
    $result = mysqli_query($conn, $query);
    $result_row = mysqli_fetch_row($result); // fetch a result row as an array

    // check connection and perform query
    if($result){
        // verify user name and hashed password
        if(mysqli_num_rows($result) == 1 && $pword == $result_row[3] ) {

            // set session data
            $_SESSION['id'] = $result_row[0];
            $_SESSION['uname']  = $result_row[1];

            echo "<h1>Welcome back</h1>";
            Die ("click on this <a href='profile.php'> link </a> to see profile");

        }else {
            echo "<p> wrong username or password </p>";
        }
    }

    // close connection
    mysqli_close($conn);
?>
</body>
</html>
