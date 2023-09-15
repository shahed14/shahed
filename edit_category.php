<?php
// Include the database connection file
include 'database_connection.php';

// Placeholder function to update category information in the database
function updateCategory($connection, $id, $name) {
  // Prepare the update query
  $query = "UPDATE category SET name = ? WHERE id = ?";
  $statement = $connection->prepare($query);

  // Bind the parameters
  $statement->bind_param('si', $name, $id);

  // Execute the update query
  $statement->execute();

  // Check if the update operation was successful
  if ($statement->affected_rows > 0) {
    // Redirect to the category listing page after successful update
    header("Location: categories.php");
    exit();
  } else {
    // Handle error if the update operation fails
    echo "Category not found or no changes made.";
  }

  // Close the statement (no need to close the connection when using include)
  $statement->close();
}

// Function to get category details by ID
function getCategoryById($connection, $id) {
  // Prepare the select query
  $query = "SELECT * FROM category WHERE id = ?";
  $statement = $connection->prepare($query);

  // Bind the parameter
  $statement->bind_param('i', $id);

  // Execute the query
  $statement->execute();

  // Get the result set
  $result = $statement->get_result();

  // Fetch the category data
  $category = $result->fetch_assoc();

  // Close the statement
  $statement->close();

  // Return the category data
  return $category;
}

// Check if the category ID is provided
if (!isset($_GET['id'])) {
  header("Location: categories.php");
  exit();
}

// Get the category details based on the ID
$id = $_GET['id'];
$category = getCategoryById($connection, $id);

if (!$category) {
  header("Location: categories.php");
  exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $newName = $_POST['categoryName'];

  // Update the category information in the database
  updateCategory($connection, $id, $newName);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Category</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Product Management Dashboard</a>
    <!-- Add other navigation links or components here -->
  </nav>

  <div class="container mt-4">
    <h2>Edit Category</h2>

    <!-- Edit category form -->
    <form method="POST" action="edit_category.php?id=<?php echo $category['id']; ?>">
      <div class="form-group">
        <label for="categoryName">Category Name:</label>
        <input type="text" class="form-control" id="categoryName" name="categoryName" value="<?php echo $category['name']; ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
