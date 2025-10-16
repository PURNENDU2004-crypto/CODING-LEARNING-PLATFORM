<?php
require "myDb.php";

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Trim inputs correctly
    $fullname = trim($_POST['fullname']);
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm-pass'];

    // Validation
    if (empty($fullname) || empty($username) || empty($email) || empty($password) || empty($confirm_pass)) {
        $error = "All fields are required";
    } elseif ($password !== $confirm_pass) {
        $error = "Passwords do not match";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters";
    } else {
        // Check if email already exists (keep existing query style)
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $error = "Email already registered";
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into database (keep existing data types)
            $sql = "INSERT INTO users (full_name, username, email, password) 
                    VALUES ('$fullname', '$username', '$email', '$hashed_password')";
            if (mysqli_query($conn, $sql)) {
               // $success = "Registration successful! You can now log in.";
               header("Location: home.php");
                exit();
            } else {
                $error = "Error: " . mysqli_error($conn);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLearn - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="code-icon">💻</div>
            <h1>CodeLearn</h1>
            <p>Start your coding journey with us. Learn, practice, and become an expert!</p>
        </div>

        <div class="right-panel">
            <h2>Register</h2>

            <!-- Display error or success messages -->
            <?php if($error) echo "<p class='error'>$error</p>"; ?>
            <?php if($success) echo "<p class='success'>$success</p>"; ?>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="reg-fullname">Full Name</label>
                    <input type="text" id="reg-fullname" required placeholder="Enter your name" name="fullname">
                </div>
                <div class="form-group">
                    <label for="reg-username">User Name</label>
                    <input type="text" id="reg-username" required placeholder="Enter your username" name="username">
                </div>
                <div class="form-group">
                    <label for="reg-email">Email</label>
                    <input type="email" id="reg-email" required placeholder="email@example.com" name="email">
                </div>
                <div class="form-group">
                    <label for="reg-password">Password</label>
                    <input type="password" id="reg-password" required placeholder="At least 6 characters" name="password">
                </div>
                <div class="form-group">
                    <label for="reg-confirm">Confirm Password</label>
                    <input type="password" id="reg-confirm" required placeholder="Re-enter password" name="confirm-pass">
                </div>
                <button type="submit">Register Now</button>
            </form>

            <div class="toggle-text">
                Already have an account? <a href="loginPage.php">Login here</a>
            </div>
        </div>
    </div>


</body>
</html>
