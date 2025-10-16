<?php
require 'myDb.php';
$error = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = trim($_POST['email']);
    $password = $_POST['password'];
}
if(empty($email)||empty($password)){
    $error = "All fields are required";
}else{
    //Check if email exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user['password'])){
            // Password is correct, start a session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['logged_in'] = true;
            header("Location: home.php");
            exit();
        }else{
            $error = "Invalid password";
        }
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLearn - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="code-icon">💻</div>
            <h1>CodeLearn</h1>
            <p>Welcome back! Continue your coding journey with us.</p>
        </div>

        <div class="right-panel">
            <h2>Login</h2>
              <?php if ($error): ?>
                <div class="alert error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" required placeholder="email@example.com" name="email">
                </div>
                <div class="form-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" required placeholder="Your password" name="password">
                </div>
                <button type="submit">Login Now</button>
            </form>
            <div class="toggle-text">
                New user? <a href="registerPage.php">Register here</a>
            </div>
        </div>
    </div>

</body>
</html>