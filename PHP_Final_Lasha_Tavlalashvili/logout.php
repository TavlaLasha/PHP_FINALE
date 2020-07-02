<?php
    session_start();

    unset($_SESSION['name']);
    unset($_SESSION['password']);
    unset($_SESSION['idn']);
    unset($_SESSION['data']);
    session_destroy();

    header('location: index.php');
    exit();
?>