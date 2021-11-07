<?php require 'inc/head.php';
      require 'login.php'; ?>

<?php

    $_SESSION = array();
    if (isset($_COOKIE[session_name()]))
    {
        setcookie(session_name(), '', time()-4200, '/');
    }

    session_destroy();

    header('Location : /login.php');

?>