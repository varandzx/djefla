<?php 



include ('config/constant.php');
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from tbl_admin where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: admin.php");
						die;
					}
				}
			}
			
			echo '<script>alert("wrong password")</script>';;
		}else
		{
			echo '<script>alert("wrong password")</script>';;
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="login_css.css">
	<title>Admin Login</title>
	<style>
		#button{
			color:white;
			background-color:#1B9CFC;
			border-radius:50px ;
		}
		.log_admin{
			text-decoration: none;
			color:#CD9928;
		}
	</style>
</head>
<body>

	<style type="text/css">
	
	

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login with admin account</div>

			<input id="text" type="text" autofocus placeholder="Username or email" name="user_name"><br><br>
			<input id="text" type="password" autofocus placeholder="Password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			
			<a class="log_admin" href="../login.php">user? click here to login with user</a><br><br>
		</form>
	</div>
</body>
</html>