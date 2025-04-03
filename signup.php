<?php
session_start();
if (isset($_SESSION['error'])) {
    echo "<div class='error-message'>".$_SESSION['error']."</div>";
    unset($_SESSION['error']); // Clear error after showing it
}

if (isset($_SESSION['success'])) {
    echo "<div class='success-message'>".$_SESSION['success']."</div>";
    unset($_SESSION['success']); // Clear success after showing it
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IORA Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="signup-container">
        <h1>Create Your IORA Account</h1>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm_password" required>

            <button type="submit">Sign Up</button>
        </form>
        <div class="redirect-login">
            <p>Already have an account? <a href="LogIn.php">Log In</a></p>
        </div>
    </div>

    <script>
        document.querySelector("form").addEventListener("submit", function (e) {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert("Passwords do not match!");
            }
        });
    </script>
    <style>
        /* Error Message */
.error-message {
    background-color: #ffcccc;
    color: #a94442;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 8px;
    text-align: center;
}

/* Success Message */
.success-message {
    background-color: #ccffcc;
    color: #4CAF50;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 8px;
    text-align: center;
}
    </style>
</body>
</html>