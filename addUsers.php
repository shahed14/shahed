<?php
// Include the database connection file
include 'database_connection.php';

// Check if the form is submitted
if (isset($_POST['addUser'])) {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  // Prepare the query to insert a new user
  $query = "INSERT INTO users (Name, email, password, role) VALUES (?, ?, ?, ?)";

  // Create a prepared statement
  $statement = mysqli_prepare($connection, $query);

  // Bind the parameters to the prepared statement
  mysqli_stmt_bind_param($statement, "ssss", $name, $email, $password, $role);

  // Execute the prepared statement
  $result = mysqli_stmt_execute($statement);

  // Check if the query executed successfully
  if ($result) {
    // Check if the role is "Affiliate"
    if ($role === 'affiliate') {
      $affiliateId = mysqli_insert_id($connection); // Get the auto-generated ID of the inserted user/affiliate

      $affiliateName = $name;
      $affiliateEmail = $email;
      $country = 'Gaza'; // Placeholder value, replace with actual country input

      // Prepare the query to insert the affiliate into the affiliates table
      $stmt = mysqli_prepare($connection, "INSERT INTO affiliates (affiliate_name, email, country) VALUES (?, ?, ?)");
      mysqli_stmt_bind_param($stmt, "sss", $affiliateName, $affiliateEmail, $country);
      mysqli_stmt_execute($stmt);

      // Check if the query executed successfully
      if (!$stmt) {
        die("Error adding affiliate: " . mysqli_error($connection));
      }

      mysqli_stmt_close($stmt);
    }

    // Redirect to the user list page after successful insertion
    header("Location: usersDash.php");
    exit();
  } else {
    // Handle query error
    die("Error adding user: " . mysqli_error($connection));
  }

  // Close the database connection
  mysqli_stmt_close($statement);
  mysqli_close($connection);
}
?>
