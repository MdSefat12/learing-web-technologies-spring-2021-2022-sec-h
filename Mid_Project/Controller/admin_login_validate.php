<?php 
	session_start();
	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$file = fopen('../Model/admin.txt', 'r');
		while(!feof($file))
		{
			$get_file = fgets($file);
			$admin_array = explode('|', $get_file);
			if(isset($admin_array[2]) and isset($admin_array[3]))
			{
				
				if(trim($admin_array[2]) == $username && trim($admin_array[3]) == $password)
				{
					$current_user['username'] = trim($admin_array[2]);
					$current_user['password'] = trim($admin_array[3]);
					$current_user['confirm'] = trim($admin_array[4]);
					$current_user['email'] = trim($admin_array[1]);
					$current_user['Adminname'] = trim($admin_array[0]);
					$current_user['Address'] = trim($admin_array[5]);
					$_SESSION['current_user'] = $current_user;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../Views/Homepage2.php');
				}
			}
		}
		echo "Username or password does not match";
	}
	else echo "Please insert username and password";
?>