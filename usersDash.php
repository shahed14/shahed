<?php
// Include the database connection file
include 'database_connection.php';

// Function to add a new user
function addUser($name, $email, $password, $role)
{
  global $connection;

  // Prepare the query to insert a new user
  $query = "INSERT INTO users (Name, email, password, role) VALUES (?, ?, ?, ?)";

  // Create a prepared statement
  $statement = mysqli_prepare($connection, $query);

  // Bind the parameters to the prepared statement
  mysqli_stmt_bind_param($statement, "ssss", $name, $email, $password, $role);

  // Execute the prepared statement
  $result = mysqli_stmt_execute($statement);

  // Check if the query executed successfully
  if ($result) {
    // Redirect to the user list page after successful insertion
    header("Location: usersDash.php");
    exit();
  } else {
    // Handle query error
    die("Error adding user: " . mysqli_error($connection));
  }

  // Close the prepared statement
  mysqli_stmt_close($statement);
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['addUser'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Add a new user
    addUser($name, $email, $password, $role);
  } elseif (isset($_POST['updateUser'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Update the user
    updateUser($id, $name, $email);
  }
}

// Fetch users from the database
function getUsers()
{
  // Include the database connection file
  include 'database_connection.php';

  // Prepare the query to fetch users
  $query = "SELECT * FROM users";

  // Execute the query
  $result = mysqli_query($connection, $query);

  // Check if the query executed successfully
  if ($result) {
    // Fetch all rows from the result set
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Free the result set
    mysqli_free_result($result);

    // Close the database connection
    mysqli_close($connection);

    // Return the users array
    return $users;
  } else {
    // Handle query error
    die("Error: " . mysqli_error($connection));
  }
}

// Fetch users from the database
$users = getUsers();
?>

<!DOCTYPE html>
<html>

<head>
  <title>User Management Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand " href="#">User Managment </a>
    <a href="adminhome.php" class="btn btn-primary">Go to Home</a>
  </nav>
  <br><br>
  <div class="container">

    <!-- Add User Form -->
    <div class="card">
      <div class="card-header">
        Add User
      </div>
      <div class="card-body">
        <form action="addUsers.php" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
              <option value="affiliate">Affiliate</option>
              <option value="user">User</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="addUser">Add User</button>
        </form>
      </div>
    </div>

    <!-- User List -->
    <div class="card mt-4">
      <div class="card-header">
        User List
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) { ?>
              <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['Name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                  <a href="editUser.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Edit</a>
                  <a href="deleteUser.php?id=<?php echo $user['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
