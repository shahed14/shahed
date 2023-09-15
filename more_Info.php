<?php
include_once('database_connection.php');

// Check if the offer ID is provided in the URL
if (isset($_GET['id'])) {
    // Sanitize the offer ID
    $offerId = $_GET['id'];

    // Construct the query to fetch the offer details
    $query = "SELECT o.id, o.name AS offer_name, c.name AS category_name, ca.campaign_name, o.description, o.commission_rate, o.start_date, o.end_date
              FROM offers o
              JOIN category c ON o.category_id = c.id
              JOIN campaign ca ON o.campaign_id = ca.id
              WHERE o.id = $offerId";

    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the offer details as an associative array
        $offer = mysqli_fetch_assoc($result);

        // Close the database connection
        mysqli_close($connection);
    } else {
        // Query failed, handle the error
        echo "Error: " . mysqli_error($connection);
    }
} else {
    // Offer ID is not provided, redirect to the offers page
    header("Location: marketplaceOffer.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

  <title>More Info - Marketplace Offers</title>

  <!-- Bootstrap core CSS -->
  <link href="marketplace/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="marketplace/assets2/css/fontawesome.css">
  <link rel="stylesheet" href="marketplace/assets2/css/templatemo-stand-blog.css">
  <link rel="stylesheet" href="marketplace/assets2/css/owl.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h2 class="text-center">Offer Details</h2>
        <div class="card mt-4">
          <div class="card-body">
            <h5 class="card-title"><?php echo $offer['offer_name']; ?></h5>
            <p class="card-text">
              <strong>Category:</strong> <?php echo $offer['category_name']; ?><br>
              <strong>Campaign:</strong> <?php echo $offer['campaign_name']; ?><br>
              <strong>Description:</strong> <?php echo $offer['description']; ?><br>
              <strong>Commission Rate:</strong> <?php echo $offer['commission_rate']; ?><br>
              <strong>Start Date:</strong> <?php echo $offer['start_date']; ?><br>
              <strong>End Date:</strong> <?php echo $offer['end_date']; ?><br>
            </p>
            <a href="#" class="btn btn-primary" onclick="showLoginModal()">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your login form here -->
          <form action="login.php" method="POST">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <!-- Include the footer HTML code here -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="marketplace/vendor2/jquery/jquery.min.js"></script>
  <script src="marketplace/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="marketplace/assets2/js/custom.js"></script>
  <script src="marketplace/assets2/js/owl.js"></script>
  <script src="marketplace/assets2/js/slick.js"></script>

  <script>
    function showLoginModal() {
        $('#loginModal').modal('show'); // Show the modal using jQuery
    }
  </script>
</body>

</html>
