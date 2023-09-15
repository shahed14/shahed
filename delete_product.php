<?php
// Include the database connection file
include 'database_connection.php';

// Function to delete a product from the database
function deleteProduct($connection, $id) {
  // Prepare the delete query
  $query = "DELETE FROM products WHERE id = ?";
  $statement = $connection->prepare($query);

  // Bind the parameter
  $statement->bind_param('i', $id);

  // Execute the delete query
  $statement->execute();

  // Check if the delete operation was successful
  if ($statement->affected_rows > 0) {
    return true;
  } else {
    return false;
  }

  // Close the statement (no need to close the connection when using include)
  $statement->close();
}

// Check if the product ID is provided
if (!isset($_GET['id'])) {
  header("Location: productDash.php");
  exit();
}

// Get the product ID
$id = $_GET['id'];

// Call the deleteProduct function to delete the product
if (deleteProduct($connection, $id)) {
  // Redirect to the product listing page after successful deletion
  header("Location: productDash.php");
  exit();
} else {
  // Handle error if deleteProduct returns false
  echo "Error deleting product.";
}
?>
