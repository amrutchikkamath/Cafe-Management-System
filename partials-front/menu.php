
<?php include('admin/config/constants.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Management System</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <!-- <div class="container"> -->
            <div class="logo" style="width: 64px; height: 64px">
                <a href="#" title="Logo">
                    <img src="images/logo5.png" alt="Cafe" class="img-responsive">
                    
                   
                
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL;?>">HOME</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL;?>categories.php">CONTACT-US</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL;?>foods.php">FOODS</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL;?>admin.php">ADMIN DASHBOARD</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL;?>logout.php">LOGOUT</a>
                    </li>
                  
                  
                </ul>
            </div>

            <!-- <div class="clearfix"></div> -->
        <!-- </div> -->
    </section>
    <!-- Navbar Section Ends Here -->