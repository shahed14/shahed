<?php
// Include the database connection file
include 'database_connection.php';

// Placeholder function to delete a user from the database
function deleteUser($connection, $id) {
  // Prepare the delete query
  $query = "DELETE FROM users WHERE ID = ?";
  $statement = $connection->prepare($query);

  // Bind the user ID parameter
  $statement->bind_param('i', $id);

  // Execute the delete query
  $statement->execute();

  // Check if the delete operation was successful
  if ($statement->affected_rows > 0) {
    header("location: usersDash.php");
  } else {
    echo "User not found.";
  }

  // Close the statement (no need to close the connection when using include)
  $statement->close();
}

if (isset($_GET['id'])) {
  $ID = $_GET['id'];

  // Delete the user from the database
  deleteUser($connection, $ID);
} else {
  echo "Invalid user ID.";
}
?>
