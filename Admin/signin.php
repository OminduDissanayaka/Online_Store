<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SignIn</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>

<body style="background: linear-gradient(135deg, #6e8efb, #a777e3);">
    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center">Admin Sign-In</h3>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password">
            </div>
            <div class="mb-3 d-flex justify-content-end">
                <a class="text-decoration-none" href="#">Forgot Password</a>
            </div>
            <button class="btn btn-primary" onclick="adminsignin();">Sign In</button>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/sweetalert2.js"></script>
</body>

</html>