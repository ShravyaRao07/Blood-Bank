<?php 
session_start();
include 'conn/connect.php';
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$errors = array();
	$query = mysqli_query($conn,"SELECT * FROM signup WHERE email = '$email'");
	
	if(mysqli_num_rows($query) == 0)
	
	
	{
		
		$errors['wrong_email'] = "Enter correct email";
	}
	else
	{
		$r = $query->fetch_assoc();
		$hash_password = $r['password'];
		 if(!password_verify($password, $hash_password))
		{
         $errors['password_wrong'] = "Your password is wrong";
		 
		}
		else
		{
			
			$_SESSION['user_login'] = $email;
			header("location:index.php");
		}
	}


}


$msg='';
if(isset($_POST['login']))
{
	$time=time()-30;
	$ip_address=getIpAddr();

	$query=mysqli_query($conn,"select count(*) as total_count from signup where TryTime > $time and IpAddress='$ip_address'");
	$check_login_row=mysqli_fetch_assoc($query);
	$total_count=$check_login_row['total_count'];
  
	if($total_count==3)
	{
		$msg="Too many failed login attempts. Please login after 30 sec";
	}
	else
	{
	
		$email=$_POST['email'];
		$password=md5($_POST['password']);
	
		$res=mysqli_query($conn,"select * from signup where email='$email' and  password='$password'");
		if(mysqli_num_rows($res))
		{
			$_SESSION['IS_LOGIN']='yes';
			mysqli_query($conn,"delete from signup where IpAddress='$ip_address'");

			header("location:index.php");

		}
		else
		{
			$total_count++;
			$rem_attm=3-$total_count;
			if($rem_attm==0)
			{
				$msg="Too many failed login attempts. Please login after 30 sec";
			}
			else
			{
				$msg="Please enter valid login details.<br/>$rem_attm attempts remaining";
			}
			$try_time=time();
			mysqli_query($conn,"insert into signup(IpAddress,TryTime) values('$ip_address','$try_time')");
		}
	}
}


function getIpAddr()
{
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
	{
		$ipAddr=$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
		$ipAddr=$_SERVER['REMOTE_ADDR'];
	}
	return $ipAddr;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/cdd3068599.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/user/logst.css">
</head>
<body>

<div class="container">
    
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="" method ="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" autofocus required>
              </div>
              <div class="input-box">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              
              <div class="button input-box">
                <input type="submit" name="login" value="Sumbit"></div>
                <?php
				if(isset($_POST['submit'])){
					$password = $_POST['password'];
					header("location:index.php");
				}
				else
				{
					if(isset($errors)): ?>
						<?php foreach($errors as $error): ?>
							<ul>
							<li id="result" style="color:goldenrod">
							<?php echo $error; ?></li>
							</ul>
						<?php endforeach; ?>
					<?php endif; 
				}
				
				?>
               <br><br>
			   <div id="result" style="color: goldenrod;"><?php echo $msg?></div>
			   <br><br>
                <div class="text sign-up-text">Don't have an account? <a href = "register.php">Sigup now</div>
				
                
				
            </div>
        </form>
      </div>
				
  	</div>
  </div>

</body>
</html>

