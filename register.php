<?php
session_start();
include("database_connection.php");

$errors = []; // Array to store validation errors

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  // Validate name
  if (empty($name)) {
    $errors[] = "Name is required";
  }

  // Validate email
  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address";
  }

  // Validate password
  if (empty($password) || strlen($password) < 10) {
    $errors[] = "Password must be at least 10 characters long";
  }

  // If there are validation errors, display them and halt execution
  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
    exit();
  }

  // Proceed with database insertion if there are no validation errors

  $query = "INSERT INTO users (Name, email, password, role) VALUES (?, ?, ?, ?)";
  $statement = mysqli_prepare($connection, $query);
  mysqli_stmt_bind_param($statement, "ssss", $name, $email, $password, $role);
  $result = mysqli_stmt_execute($statement);

  if ($result) {
    if ($role === 'affiliate') {
      $affiliateId = mysqli_insert_id($connection);
      $affiliateName = $name;
      $affiliateEmail = $email;
      $country = 'Gaza'; // Replace with actual country input

      $stmt = mysqli_prepare($connection, "INSERT INTO affiliates (affiliate_name, email, country) VALUES (?, ?, ?)");
      mysqli_stmt_bind_param($stmt, "sss", $affiliateName, $affiliateEmail, $country);
      mysqli_stmt_execute($stmt);

      if (!$stmt) {
        die("Error adding affiliate: " . mysqli_error($connection));
      }

      mysqli_stmt_close($stmt);
    }

    $_SESSION['userRole'] = $role;
    $_SESSION['name'] = $name;

    if ($role === 'admin') {
      // header("Location: login.php");
      exit();
    } elseif ($role === 'affiliate') {
      $_SESSION['affiliate_name'] = $name;
      header("Location: login.php");
      exit();
    }
  } else {
    die("Error adding user: " . mysqli_error($connection));
  }

  mysqli_stmt_close($statement);
  mysqli_close($connection);
}
?>


<!-- With this structure, you can establish a relationship between the affiliate_products table and the affiliates table as well as the products table. This allows you to associate specific products with affiliates and store additional information such as the commission percentage.

-->

<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 150px;
      max-width: 400px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center">Register</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="form-group">
        <label for="register-name">Name</label>
        <input type="text" class="form-control" id="register-name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="register-email">Email address</label>
        <input type="email" class="form-control" id="register-email" name="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="register-password">Password</label>
        <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <label for="register-role">Role</label>
        <select class="form-control" id="register-role" name="role" required>
          <option value="admin">Admin</option>
          <option value="affiliate">Affiliate</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
    <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
