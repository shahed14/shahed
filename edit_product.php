<?php
// Include the database connection file
include 'database_connection.php';

// Placeholder function to update product information in the database
function updateProduct($connection, $id, $name, $price, $description) {
  // Prepare the update query
  $query = "UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?";
  $statement = $connection->prepare($query);

  // Bind the parameters
  $statement->bind_param('sssi', $name, $price, $description, $id);

  // Execute the update query
  $statement->execute();

  // Check if the update operation was successful
  if ($statement->affected_rows > 0) {
    header("Location: productDash.php");
  } else {
    echo "Product not found or no changes made.";
  }

  // Close the statement (no need to close the connection when using include)
  $statement->close();
}

if (isset($_GET['id'])) {
  $ID = $_GET['id'];

  // Fetch the product data from the database
  // Replace this with your own logic to fetch product data based on the provided ID
  $query = "SELECT * FROM products WHERE ID = ?";
  $statement = $connection->prepare($query);
  $statement->bind_param('i', $ID);
  $statement->execute();
  $result = $statement->get_result();

  // Check if the product exists
  if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $newName = $_POST['name'];
      $newPrice = $_POST['price'];
      $newDescription = $_POST['description'];

      // Update the product information in the database
      updateProduct($connection, $ID, $newName, $newPrice, $newDescription);
    }
  } else {
    echo "Product not found.";
  }
}
?>

<!-- Display the edit product form -->
 <!DOCTYPE html>
    <html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body background="red">
<h2 class="text-center">Edit Product</h2>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6">

<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
    <div class="form-group">
        <label for="name">Name</label>
        <br>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <br>
        <input type="text" class="form-control" id="price" name="price" value="<?php echo $product['price']; ?>" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <br>
        <textarea class="form-control" id="description" name="description" required><?php echo $product['description']; ?></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="editProduct">Save Changes</button>
</form>
</div>
</div>
</div>

</body>
</html>

