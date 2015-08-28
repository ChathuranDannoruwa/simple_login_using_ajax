<?php

session_start();
if (session_destroy()) { // Destroying All Sessions
    header("Location: master.php"); // Redirecting To Home Page
}
?>