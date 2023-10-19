<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<?php 
if(isset($_GET['signup_success'])){
	echo "<div class='alert alert-success text-center'><h1>".$_GET['signup_success']."</h1><a href='login.php'>Login</a></div>";
}


 ?>
</body>
</html>
