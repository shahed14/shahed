<!-- create_product.php -->

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

// Check if the form is submitted to add a new product
if (isset($_POST['title'], $_POST['price'],$_POST['description'], $_POST['category'])) {
  $title = $_POST['title'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $category = $_POST['category'];

  // Prepare the query to insert the new product
  $query = "INSERT INTO products (name,price, description, category_id) VALUES ('$title', '$price','$description', '$category')";
  $result = mysqli_query($connection, $query);

  // Check if the query was successful
  if ($result) {
    // Redirect to the product listing page after successful insertion
    header("Location: productDash.php");
    exit();
  } else {
    // Handle error if the query fails
    echo "Error adding product: " . mysqli_error($connection);
  }
}
?>

<h2>Create Product</h2>

<!-- Add new product form -->
<form method="POST" action="create_product.php">
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="form-group">
    <label for="title">price:</label>
    <input type="text" class="form-control" id="price" name="price" required>
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" id="description" name="description" required></textarea>
  </div>
  <div class="form-group">
    <label for="category">Category:</label>
    <select class="form-control" id="category" name="category" required>
      <?php
      // Retrieve categories from the database
      $categories = getCategories();

      // Display the categories in the dropdown options
      foreach ($categories as $category) {
        echo "<option value='{$category['id']}'>{$category['name']}</option>";
      }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Add Product</button>
</form>
