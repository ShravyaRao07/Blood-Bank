
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <script src="https://kit.fontawesome.com/cdd3068599.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/admin/adminst.css">
</head>
<body>
<div class="container">
    <div class="signup-form">
        <div class="title">Signup</div>
            <form action="" method = "POST" >
                <div class="input-boxes">
                    <div class="input-box">
                        <i class="fas fa-user"></i>
                        <input type="text" name="admin_name" placeholder="Admin name" required>
                    </div>
                    <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input type="password"name="admin_password" placeholder="Enter your password" required>
                    </div>
                    <div class="button input-box">
                        <input type="submit" name="submit" value="SIGN IN">
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

<?php
include('conn/connect.php');
session_start();
if(isset($_POST['submit']))
{
    $admin_name = mysqli_real_escape_string($conn, $_POST['admin_name']);
    $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);
    
    $query = "SELECT * FROM `admin_login` WHERE `username`='$admin_name' AND `password`='$admin_password' ";
    
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['admin_name'] = $admin_name;
        
        echo "<script>alert('You are Logged in into admin panel')</script> ";

        echo "<script>window.open('adminindex.php','_self')</script> ";
    }
    else
    {
        echo "<script>alert('username or Password is Wrong') </script>";
    }

}
?>
</body>
</html>
