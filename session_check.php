<?php
session_start(); // Start the session

// Check if the user is not logged in or doesn't have the required role
if (!isset($_SESSION['userRole'])) {
  // Redirect the user to the login page or show an error message
  header("Location: login.php");
  exit();
}

// Check the user role and redirect accordingly
if ($_SESSION['userRole'] === 'affiliate') {
  header("Location: home2.php");
  exit();
} elseif ($_SESSION['userRole'] === 'admin') {
  header("Location: adminhome.php");
  exit();
} else {
  // Redirect to a default page or show an error message
  header("Location: login.php");
  exit();
}
?>

