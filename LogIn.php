<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database credentials
    $servername = "localhost";
    $username = "root"; // Change if needed
    $password = ""; // Change if needed
    $dbname = "users";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect data from form
    $user_mail = $_POST['username'] ?? '';
    $user_password = $_POST['password'] ?? '';

    // Validate input
    if (empty($user_mail) || empty($user_password)) {
        $error = "Please fill in all fields.";
    } else {
        // Prepare and execute statement
        $stmt = $conn->prepare("SELECT password, username FROM korisnik WHERE mail = ?");
        $stmt->bind_param("s", $user_mail);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password, $username);
            $stmt->fetch();

            // Verify password
            if (password_verify($user_password, $hashed_password)) {
                // Start session and store username
                session_start();
                $_SESSION['username'] = $username;

                header("Location: index.php"); // Redirect to main page
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No user found with that email.";
        }

        // Close statement and connection
        $stmt->close();
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IORA Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
      <div class="logo">
        <a href="index.php">
          <img src="logo/IORAblackwhite .jpg" alt="logo">
        </a>
      </div>
        <!-- Header inside the login box -->
        <h1 class="login-header">Login to IORA</h1>

        <?php if (isset($error)): ?>
            <div class="error-message">
                <p><?php echo $error; ?></p>
            </div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="" method="post">
            <label for="e-mail">E-mail</label>
            <input type="text" name="username" id="e-mail" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Log In</button>
        </form>

        <!-- Social Login Buttons -->
        <div class="social-login">
            <a href="#"><i class="fab fa-google"></i> Google</a>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
        </div>

        <!-- New Account -->
        <div class="new-account">
          <a href="signup.php">Don't have an account?</a>
      </div>

        <!-- Forgot Password -->
        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
    </div>
</body>
</html>