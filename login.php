<?php
session_start();
include("database_connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['EMAIL'];
    $password = $_POST['PASSWORD'];

    $userQuery = $connection->prepare("SELECT id, Name, email, password, role FROM users WHERE email = ? AND password = ?");
    $userQuery->bind_param("ss", $email, $password);
    $userQuery->execute();
    $userResult = $userQuery->get_result();

    $affiliateQuery = $connection->prepare("SELECT id, affiliate_name, email FROM affiliates WHERE email = ? ");
    $affiliateQuery->bind_param("s", $email);
    $affiliateQuery->execute();
    $affiliateResult = $affiliateQuery->get_result();

    if ($userResult->num_rows === 1) {
        $row = $userResult->fetch_assoc();
        $userRole = $row['role'];

        $_SESSION['name'] = $row['Name'];
        $_SESSION['userId'] = $row['id'];

        if ($userRole === 'admin') {
            header("Location: adminhome.php");
            exit();
        } elseif ($userRole === 'affiliate') {
            header("Location: home2.php");
            exit();
        }
    } elseif ($affiliateResult->num_rows === 1) {
        $row = $affiliateResult->fetch_assoc();

        $_SESSION['name'] = $row['affiliate_name'];
        $_SESSION['userId'] = $row['id'];

        header("Location: home2.php");
        exit();
    } else {
        $error = "Invalid email or password";
    }
    if (empty($error)) {
        $error = "This email does not exist in the database";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Bootstrap CSS -->
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
    <h2 class="text-center">Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="login-email">Email address</label>
            <input type="email" class="form-control" id="login-email" name="EMAIL" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="login-password">Password</label>
            <input type="password" class="form-control" id="login-password" name="PASSWORD" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <p class="text-center mt-3">Don't have an account? <a href="register.php">Register</a></p>

    <?php if (isset($error)) : ?>
        <div class="alert alert-danger mt-3"><?php echo $error; ?></div>
    <?php endif; ?>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
