<?php
    include('header.php');

    $_SESSION = array();
    setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
    echo "<h1> Logged out </h1>";
?>
