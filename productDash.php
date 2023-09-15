<!DOCTYPE html>
<html>
<head>
  <title>Product Management Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand " href="#">product Managment dashboard </a>
    <a href="adminhome.php" class="btn btn-primary">go to home</a>
  </nav>
<br>
<br>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3">
        <!-- Sidebar -->
        <div class="list-group">
          <a href="productDash.php?page=product_listing" class="list-group-item list-group-item-action">Product Listing</a>
          <a href="productDash.php?page=create_product" class="list-group-item list-group-item-action">Create Product</a>
          <a href="productDash.php?page=categories" class="list-group-item list-group-item-action">Categories</a>
          <a href="adminhome.php" class="list-group-item list-group-item-action">go to adminHome</a>
        </div>
      </div>
      <div class="col-md-9">
        <!-- Content area -->
        <?php
        // Implement the functionality for each page here
        $page = isset($_GET['page']) ? $_GET['page'] : '';

        if ($page === 'create_product') {
          include 'create_product.php';
        } elseif ($page === 'edit_product') {
          include 'edit_product.php';
        } elseif ($page === 'categories') {
          include 'categories.php';
        } else {
          include 'product_listing.php';
        }
        ?>
      </div>
    </div>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
