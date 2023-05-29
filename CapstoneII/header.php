<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Skin Monitoring Device</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header with navigation links -->
    <header>
        <nav>
            <ul>
                <li class="active"><a href="home.php">Home</a></li>
                <?php 
                    session_start();
                    if(isset($_SESSION['user'])){ 
                ?>
                <li><a href="data.php">Data</a></li>
            <?php }else{ ?>
                <li><a href="#" onclick="alert('You must logged in to see data')">Data</a></li>
            <?php } ?>
                <!-- <li><a href="settings.html">Settings</a></li> -->
                <li><a href="about.php">About</a></li>
                
                <li><a href="alarms.php">Alarms</a></li>
                <?php 
                    // session_start();
                    if(isset($_SESSION['user'])){ 
                    ?>
                    <li><a href="logout.php" id="login">LogOut</a></li>
                <?php }else{ ?>
                    <li><a href="login.php" id="login">LogIn</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>