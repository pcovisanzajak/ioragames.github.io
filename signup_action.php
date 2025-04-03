<?php
session_start();
include("db_connection.php"); // Ensure this points to your DB connection

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the user already exists
    $check_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        // If user exists, show error
        $_SESSION['error'] = "This account already exists. Please use a different username or email.";
        header("Location: signup.php"); // Redirect back to signup page
        exit();
    } else {
        // Encrypt the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert new user if they don't exist
        $insert_sql = "INSERT INTO users (username, email, password) 
                       VALUES ('$username', '$email', '$hashed_password')";
        if (mysqli_query($conn, $insert_sql)) {
            $_SESSION['success'] = "Account created successfully! Please log in.";
            header("Location: login.php"); // Redirect to login page
        } else {
            $_SESSION['error'] = "Something went wrong. Please try again.";
            header("Location: signup.php"); // Redirect back to signup
        }
        exit();
    }
}
?>
