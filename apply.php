<?php
// Check if the registration form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate and process the registration data
    // ...
    // Add your validation and database insertion logic here
    // ...

    // Redirect to a success page after registration
    header("Location: registration_success.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Registration Page</title>

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
                <h2 class="text-center">Registration Form</h2>
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
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
</body>

</html>
