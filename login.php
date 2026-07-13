<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Staff Login</title>
     <style>
        /* Body with bronze gradient background */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #b08d57, #3e2723); /* bronze dark/light combo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Login card with light bronze/contrast */
        .login-container {
            background: rgba(255, 248, 240, 0.95); /* light bronzeish card */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
            width: 350px;
            text-align: center;
            backdrop-filter: blur(5px);
        }

        .login-container h2 {
            margin-bottom: 30px;
            color: #6b3e26; /* darker bronze for text */
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #a67c52;
            background: rgba(255,255,255,0.9);
            box-sizing: border-box;
            font-size: 15px;
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background: #a67c52;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
            transition: background 0.3s, transform 0.2s;
        }

        .login-container button:hover {
            background: #8c6239;
            transform: scale(1.03);
        }

        .login-container a {
            display: inline-block;
            margin: 10px 5px;
            color: #5d4037;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .login-container a:hover {
            color: #3e2723;
            text-decoration: underline;
        }

        p.error {
            color: red;
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Staff Login</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
        <div>
            <a href="forgot_password.php">Forgot Password?</a>
            <a href="register.php">Register</a>
            <a href="logout.php">Logout</a>
        </div>
    </form>

    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email='$email'";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) {
            $user = $res->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['user'] = $user['id'];
                header("Location: dashboard.php");
                exit();
            } else echo "<p class='error'>Invalid Password!</p>";
        } else echo "<p class='error'>Email not found!</p>";
    }
    ?>
</div>

</body>
</html>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        $user = $res->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['id'];
            header("Location: dashboard.php");
        } else echo "<p style='color:red'>Invalid Password!</p>";
    } else echo "<p style='color:red'>Email not found!</p>";
}
?>
</body>
</html>
