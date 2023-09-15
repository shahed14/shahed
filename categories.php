<!-- categories.php -->

<?php
// Include the database connection file
include 'database_connection.php';

// Function to retrieve categories from the database
function getCategories() {
  global $connection;

  // Prepare the query to retrieve categories
  $query = "SELECT * FROM category";
  $result = mysqli_query($connection, $query);

  // Check if the query was successful
  if ($result) {
    $categories = [];

    // Fetch the categories from the result set
    while ($row = mysqli_fetch_assoc($result)) {
      $categories[] = $row;
    }

    // Free the result set
    mysqli_free_result($result);

    return $categories;
  } else {
    // Handle error if the query fails
    echo "Error retrieving categories: " . mysqli_error($connection);
    return [];
  }
}

// Check if the form is submitted to add a new category
if (isset($_POST['categoryName'])) {
  $categoryName = $_POST['categoryName'];

  // Prepare the query to insert the new category
  $query = "INSERT INTO category (name) VALUES ('$categoryName')";
  $result = mysqli_query($connection, $query);

  // Check if the query was successful
  if ($result) {
    // Redirect to the categories page after successful insertion
    header("Location: categories.php");
    exit();
  } else {
    // Handle error if the query fails
    echo "Error adding category: " . mysqli_error($connection);
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Categories</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h2>Categories</h2>

    <!-- Display existing categories -->
    <table class="table">
      <thead>
        <tr>
          <th>Category ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Retrieve categories from the database
        $categories = getCategories();

        // Display the categories in the table rows
        foreach ($categories as $category) {
          echo "<tr>";
          echo "<td>{$category['id']}</td>";
          echo "<td>{$category['name']}</td>";
          echo "<td>
                  <a href='edit_category.php?id={$category['id']}' class='btn btn-primary'>Edit</a>
                  <a href='delete_category.php?id={$category['id']}' class='btn btn-danger'>Delete</a>
                </td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <!-- Add new category form -->
    <h3>Add New Category</h3>
    <form method="POST" action="categories.php">
      <div class="form-group">
        <label for="categoryName">Category Name:</label>
        <input type="text" class="form-control" id="categoryName" name="categoryName" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
