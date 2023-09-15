<!DOCTYPE html>
<html>
<head>
  <title>Users Page</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Users</h1>
    <table class="table">
      <thead>
        <tr>
          <th>User ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status</th>
          <th>Registration Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // Fetch users data from your database
          $users = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Admin', 'status' => 'Active', 'reg_date' => '2023-06-17'],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'Affiliate', 'status' => 'Active', 'reg_date' => '2023-06-18'],
            ['id' => 3, 'name' => 'Mark Johnson', 'email' => 'mark@example.com', 'role' => 'Customer', 'status' => 'Inactive', 'reg_date' => '2023-06-19']
          ];
        
          foreach ($users as $user) {
            echo '<tr>';
            echo '<td>' . $user['id'] . '</td>';
            echo '<td>' . $user['name'] . '</td>';
            echo '<td>' . $user['email'] . '</td>';
            echo '<td>' . $user['role'] . '</td>';
            echo '<td>' . $user['status'] . '</td>';
            echo '<td>' . $user['reg_date'] . '</td>';
            echo '<td>';
            echo '<a href="editUser.php?id=' . $user['id'] . '" class="btn btn-primary">Edit</a>';
            echo '<a href="deleteUser.php?id=' . $user['id'] . '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this user?\')">Delete</a>';
            echo '</td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
