<?php 
    /**
     * logout.php
     *
     * A simple logout module for all of our login module.
     *
     */

    // enable sessions
    session_start();

    // delete cookies, if any
    setcookie("user", "", time() - 3600);
    setcookie("pass", "", time() - 3600);

    // log user out
    setcookie(session_name(), "", time() - 3600);
	
    session_destroy();
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Log Out</title>
  </head>
  <body>
    <h1>You are logged out!</h1>
    <h3><a href="index.php">Home</a></h3>
  </body>
</html>
