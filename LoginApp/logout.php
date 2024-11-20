<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: form.php"); // Redirect to the login page (or wherever you want)
exit();
?>