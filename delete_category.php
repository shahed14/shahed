<?php
// Include the database connection file
include 'database_connection.php';

// Function to delete a category from the database
function deleteCategory($connection, $id) {
  // Prepare the delete query
  $query = "DELETE FROM category WHERE id = ?";
  $statement = $connection->prepare($query);

  // Bind the parameter
  $statement->bind_param('i', $id);

  // Execute the delete query
  $statement->execute();

  // Check if the delete operation was successful
  if ($statement->affected_rows > 0) {
    // Redirect to the category listing page after successful deletion
    header("Location: categories.php");
    exit();
  } else {
    // Handle error if the delete operation fails
    echo "Category not found or could not be deleted.";
  }

  // Close the statement (no need to close the connection when using include)
  $statement->close();
}

// Check if the category ID is provided
if (!isset($_GET['id'])) {
  header("Location: categories.php");
  exit();
}

// Get the category ID
$id = $_GET['id'];

// Delete the category
deleteCategory($connection, $id);
?>
