<?php
// Start the session (if not already started)
session_start();

// Destroy all session data
session_destroy();

// Redirect the user to the desired page
header("Location: home2.php");
exit;
?>
