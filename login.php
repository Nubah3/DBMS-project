<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Material-UI CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #2B2B2B, #565656);
            font-family: 'Roboto', sans-serif;
            color: #FFFFFF;
        }

        .container {
            background: linear-gradient(to bottom, #2B2B2B, #565656);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: rgba(43, 43, 43, 0.7);
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            height: 400px;
            border: 1px solid #F5F5F5;
            margin: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 50px 50px rgba(0, 0, 0, 0.3);
        }

        .title-bar {
            padding: 10px 0;
            border-radius: 10px 10px 0 0;
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        .title-bar h1 {
            font-style: italic;
            margin: 0;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
            width: 100%;
        }

        .form-group input {
            width: calc(100% - 20px);
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .form-group input[type="text"]::placeholder,
        .form-group input[type="password"]::placeholder {
            color: #B0B0B0;
        }

        .form-group .fas {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #B0B0B0;
        }

        .login-btn {
            padding: 12px;
            background-color: transparent;
            color: #FFFFFF;
            border: 1px solid #FFFFFF;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s;
            font-size: 16px;
            margin: 0 auto;
            display: block;
        }
        .login-btn a{
            text-decoration: none;
            color: #FFFFFF;
        }

        .login-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            text-decoration: none;
            color: #FAF9F6;
        }
        #ro{
            color: tan;
            text-decoration: none;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="title-bar">
                <h1>Login</h1>
               
            </div>
            <form method="post">
                <div class="form-group">
                    <input type="text" placeholder="User ID" name="userid" autocomplete="off" required>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" autocomplete="off" required>
                    <i class="fas fa-lock"></i>
                </div>
                <button type="submit" class="login-btn"><a href="welcome.php" > <i class="fas fa-sign-in-alt"></i> Login</a></button>
            </form>
            <div class="register-link">
                <h6>Don't have ave any account?
                <a href="user.php" id="ro">Register</a></h6>
            </div>
        </div>
    </div>
</body>
</html>