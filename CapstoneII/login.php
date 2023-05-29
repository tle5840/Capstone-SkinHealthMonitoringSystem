<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        
        <form method="post" action="" >

            <table width="400px" align="center" id="login-form">
                <caption><h2>Login</h2>
                    <h4>
                        <center>    
                <?php 
                    if(isset($_POST['username'])){
                        include 'config.php';
                        extract($_POST);
                        $qry = "select * from users where username = '".$username."' and password = '".$password."'";
                        $qry_r = mysqli_query($con,$qry) or die(mysqli_error($con));
                        $count = mysqli_num_rows($qry_r);
                        if($count > 0){
                            session_start();
                            $_SESSION['user'] = $username;
                            header('Location:index.php');
                        }else{
                            echo "Wrong username or password";
                        }
                    }
                ?>
            </center>
                    </h4>
                </caption>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" id="username" name="username" placeholder="Enter username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id="password" name="password" placeholder="Enter password" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="login">Login</button></td>
                </tr>
            </table>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
