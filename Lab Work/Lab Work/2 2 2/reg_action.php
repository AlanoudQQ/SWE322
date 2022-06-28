<?php
    include('header.php');
	include('db_config.php');

    // values from the user input in the form
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password =  $_POST['user_pword'];

    // find user with matching email and verify
    $query = "SELECT * from user_accounts WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    // check connection and perform query to check if email already exist or not
    if(mysqli_num_rows($result) == 0){
        add_user($conn, $user_name, $email, $password);
    }
    
    // insert into table "profile"
    function add_user($conn, $un, $em, $pw){
        $stmt = $conn->prepare('INSERT INTO user_accounts (user_name, email, password) VALUES(?,?,?)');
        $stmt->bind_param('sss', $un, $em, $pw);
        $stmt->execute();
        $stmt->close();

        echo "<h1>Registered Successfully</h1>";
        Die ("click on this <a href='login.php'> link </a> to login");
    }

    // Close connection
    mysqli_close($conn);
?>