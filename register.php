<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "<p style='color:red;'>Passwords do not match.</p>";
    } else {
        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Database credentials
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'cafe-project'; // Update with your database name

        // Create DB connection
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert new user into the database
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            // After successful registration, redirect to login page
            header("Location: login.php");
            exit();
        } else {
            echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Shop Registration</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-image: url('https://i.ytimg.com/vi/DyJTVkRP1vY/maxresdefault.jpg'); /* Add your background image */
            background-size: cover;
            background-position: center;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.6); /* Transparent dark background for form */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #FFD700; /* Coffee-like yellow color */
        }

        .form-container label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
            color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #D2691E; /* Coffee brown color */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #8B4513; /* Darker brown on hover */
        }

        .error {
            color: #ff0000;
            font-size: 14px;
            margin-top: 10px;
        }

        .form-container a {
            color: #FFD700; /* Yellow color for links */
            text-decoration: none;
            font-size: 14px;
            display: block;
            margin-top: 15px;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        .form-container p {
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Welcome to Café Shop!</h2>
        <p>Register to enjoy the best coffee in town.</p>
        <br>
        <form method="POST" action="register.php">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>
            <button type="submit">Register</button>
        </form>

        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>

</body>
</html>
