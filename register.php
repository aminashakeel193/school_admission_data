<?php 
include('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Staff Registration</title>
    <style>
        /* Background gradient purple combo */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e910ccff, #000000ff); /* purple-pink gradient */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        /* Registration card */
        .register-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            width: 350px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            animation: floatIn 1s ease-out;
        }

        @keyframes floatIn {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .register-container h2 {
            margin-bottom: 25px;
            color: #d41dcbff; /* deep purple */
        }

        /* Input fields */
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #cf9cd9ff; /* light purple border */
            font-size: 15px;
            transition: all 0.3s;
        }

        .register-container input:focus {
            border-color: #d61666ff; /* bright purple on focus */
            box-shadow: 0 0 5px #f5089aff;
            outline: none;
        }

        /* Button */
        .register-container button {
            width: 100%;
            padding: 12px;
            background: #dd28bfff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
            transition: transform 0.3s, background 0.3s;
        }

        .register-container button:hover {
            background: #5a0fd4;
            transform: scale(1.05);
        }

        /* Link styling */
        .register-container a {
            display: inline-block;
            margin-top: 15px;
            color: #7b2ff7;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .register-container a:hover {
            color: #5a0fd4;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Staff Registration</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Register</button>
    </form>
    <a href="login.php">Login</a>
</div>

</body>
</html>

<?php
if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $otp = rand(100000, 999999); // Generate OTP
    $verified = 0; // Not verified yet

    // Insert user
    $sql = "INSERT INTO users (name, email, password, otp, verified)
            VALUES ('$name', '$email', '$password', '$otp', '$verified')";

    if ($conn->query($sql)) {

        // Send OTP email
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "";      // Your email
            $mail->Password = "";         // Gmail app password
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;

            $mail->setFrom("your_email@gmail.com", "Your Website");
            $mail->addAddress($email);

            $mail->Subject = "Your Registration OTP";
            $mail->Body = "Hello $name,\n\nYour OTP is: $otp";

            $mail->send();

            echo "<p>Registration successful! OTP sent to your email.</p>";
            echo "<p><a href='verify_reg_otp.php?email=$email'>Verify OTP</a></p>";

        } catch (Exception $e) {
            echo "Error sending email: " . $mail->ErrorInfo;
        }

    } else {
        echo "Error: " . $conn->error;
    }
}
?>

</body>
</html>
