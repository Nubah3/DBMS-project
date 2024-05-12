<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Health Tracking</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #37474F;
            color: #FFFFFF;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn {
            border: none;
            color: #FFFFFF;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #4DD0E1;
        }

        .btn-primary {
            background-color: #00ACC1;
        }

        .btn-secondary {
            background-color: #FF7043;
        }

        .btn-tertiary {
            background-color: #66BB6A;
        }

        .btn-logout {
            background-color: transparent;
            border: 1px solid #FFFFFF;
        }

        .btn-logout:hover {
            background-color: #9C27B0;
        }

        .logout-container {
            margin-top: 50px;
            margin-left: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Welcome to Health Tracking</h1>
        </div>
        <div class="buttons">
            <a class="btn btn-primary" href="display.php">See All Users Information</a>
            <a class="btn btn-secondary" href="seerecform.php">See All Users Record</a>
            <a class="btn btn-tertiary" href="seegoform.php">See All Users Goals</a>
        </div>
        <div class="logout-container">
            <a class="btn btn-logout" href="login.php">Logout</a>
        </div>
    </div>
</body>
</html>