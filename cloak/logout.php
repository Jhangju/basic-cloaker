<?php
session_start();
if(isset($_SESSION["login"]))
{
$_SESSION["login"] = "loggedout";
// remove all session variables
session_unset();

// destroy the session
session_destroy(); 
}
header('Location: ./index.php');


?>