<?php
error_reporting(E_ERROR);
include('config/constants.php');
include('login-check.php');
?>
<html>
<head>
    <title>Cafe Management System - Home Page</title>
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        /* Apply general body styles */
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://i.ytimg.com/vi/DyJTVkRP1vY/maxresdefault.jpg'); /* Add your coffee shop background image */
            background-size: cover;
            background-position: center;
            color: #fff; /* Text color set to white for better contrast */
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;

            /* Apply the blur effect to the background */
            position: relative;
        }

        /* Add a pseudo-element for the blur effect */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: inherit;
            background-size: cover;
            background-position: center;
            filter: blur(8px); /* Adjust the blur intensity here */
            z-index: -1; /* Send the blurred background behind the content */
        }

        /* Wrapper for the entire page content */
        .wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Menu Section Styles */
        .Menu {
            background-color: rgba(0, 0, 0, 0.7); /* Transparent black for menu background */
            padding: 20px;
        }

        .Menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .Menu ul li {
            margin-right: 20px;
        }

        .Menu ul li a {
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .Menu ul li a:hover {
            background-color: #8B4513; /* Rustic coffee brown color on hover */
        }

        /* Add some space between sections */
        .content {
            flex-grow: 1;
            padding: 40px;
            text-align: center;
        }

        /* Ensure footer appears at the bottom */
        .footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Adjust styling of buttons or other interactive elements if needed */
        button {
            background-color: #8B4513;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #5c3d2e;
        }

    </style>
</head>

<body>
    <!--- Menu Section Starts-->
    <div class="Menu">
        <div class="wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="manage-admin.php">Admin</a></li>
                <li><a href="manage-category.php">Category</a></li>
                <li><a href="manage-food.php">Food</a></li>
                <li><a href="manage-order.php">Order</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="user.php">Home Dashboard</a></li>
            </ul>
        </div>
    </div>
    <!--- Menu Section Ends-->

    <!-- Content Section (Your main content goes here) -->
    <div class="content">
        <h1>Welcome to the Cafe Management System</h1>
        <p>Manage orders, food categories, and more with ease.</p>
    </div>

    <!-- Footer Section (If you want a footer) -->
    <div class="footer">
        <p>&copy; 2024 Cafe Management System</p>
    </div>
</body>
</html>
