<?php include('config/constants.php'); ?>

<html>
<head>
    <title>Login - Cafe Management System</title>
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        /* Body background image */
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://static.vecteezy.com/system/resources/previews/004/684/788/non_2x/black-and-white-coffee-shop-background-eps-free-vector.jpg'); /* Replace with your coffee shop background image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Applying blur effect to the background */
        body::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: inherit;
            filter: blur(8px); /* Blur effect */
            z-index: -1; /* Keeps background behind the content */
        }

        /* Login form container */
        .login {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent black background for contrast */
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            color: white;
            width: 100%;
            max-width: 400px;
        }

        .login h1 {
            margin-bottom: 20px;
            font-size: 30px;
            color: #f4a261; /* Light coffee color */
        }

        /* Form input fields */
        .login input[type="text"],
        .login input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Button styling */
        .login input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #f4a261;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .login input[type="submit"]:hover {
            background-color: #e76f51; /* Darker shade on hover */
        }

        /* Error and success messages */
        .login .success, .login .error {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
        }

        .login .success {
            background-color: #2ecc71; /* Green for success */
            color: white;
        }

        .login .error {
            background-color: #e74c3c; /* Red for error */
            color: white;
        }

        /* Footer */
        p.text-center {
            margin-top: 20px;
            color: #f4a261; /* Light coffee color */
        }

    </style>
</head>
<body>

<div class="login">
    <h1 class="text-center">LOGIN FORM</h1>
    <br><br>

    <?php 
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if(isset($_SESSION['no-login-message']))
        {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
    ?> 

    <form method="POST" class="text-center">
        USERNAME:- <br>
        <input type="text" name="username" placeholder="Enter Username" required><br><br>

        PASSWORD:- <br>
        <input type="password" name="password" placeholder="Enter Password" required><br><br>

        <input type="submit" name="submit" value="Login" class="btn-primary"><br><br>
    </form>

    <!-- Login Form Ends Here -->
    <p class="text-center">Created By - Jeevan M S</p>
</div>

<?php
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=md5($_POST['password']);

  $sql ="SELECT *FROM tbl_admin WHERE username='$username' AND password='$password'";
  $res =mysqli_query($conn, $sql);

  $count =mysqli_num_rows($res);

  if($count==1)
  {
      $_SESSION['login']="<div class='success'>LOGIN SUCCESSFULLY</div>";
      $_SESSION['user'] =$username;
      header('location:'.SITEURL.'admin/');
  }
  else
  {
    $_SESSION['login']="<div class='error'>LOGIN FAIL</div>";
    header('location:'.SITEURL.'admin/login.php');
  }
}
?>

</body>
</html>
