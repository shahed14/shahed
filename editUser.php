
<?php
// Include the database connection file
include 'database_connection.php';

// Placeholder function to update user information in the database
function updateUser($connection, $id, $email, $password) {
  // Prepare the update query
  $query = "UPDATE users SET Email = ?, password = ? WHERE id = ?";
  $statement = $connection->prepare($query);

  // Bind the parameters
  $statement->bind_param('ssi', $email, $password, $id);

  // Execute the update query
  $statement->execute();

  // Check if the update operation was successful
  if ($statement->affected_rows > 0) {
        header("Location: usersDash.php");

  } else {
    echo "User not found or no changes made.";
  }

  // Close the statement (no need to close the connection when using include)
  $statement->close();
}

if (isset($_GET['id'])) {
  $ID = $_GET['id'];

  // Fetch the user data from the database
  // Replace this with your own logic to fetch user data based on the provided ID
  $query = "SELECT * FROM users WHERE ID = ?";
  $statement = $connection->prepare($query);
  $statement->bind_param('i', $ID);
  $statement->execute();
  $result = $statement->get_result();

  // Check if the user exists
  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $newEmail = $_POST['email'];
      $newPassword = $_POST['password'];

      // Update the user information in the database
      updateUser($connection, $ID, $newEmail, $newPassword);
    }
    ?>
    <!DOCTYPE html>
    <html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body background="red">
    <!-- Edit User Form -->
    <h2 class="text-center" style="color:darkred;">Edit User </h2>
    <br>
    <br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="POST" action="">
        <div class="form-group">
          <label for="email">Email:</label>
          <br>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        </div>
<br>

        <div class="form-group">
          <label for="password">Password:</label>
          <br>
          <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>" required>
        </div>
        <br><br>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
    <?php
  } else {
    echo "User not found.";
  }

  // Close the statement and the database connection
  $statement->close();
  $connection->close();
} else {
  echo "Invalid user ID.";
}
?>
