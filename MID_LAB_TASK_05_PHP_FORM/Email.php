
<?php
$uerro = "";
$email="";


if(isset($_REQUEST['submit']))
{
	if($_REQUEST['email']== null)
{
	$uerro = "invalid email";
}
else
{
	$email =$_REQUEST["email"];
}

}

?>

<html>
<head>
	<title></title>
</head>
<body>

	<form method= "POST" action="#">
		<table>
			<tr>
				<td>EMAIL</td>
				
				
					<td><input type="email" name="email"value ="<?php echo $email; ?>"></td>
					<td><?php echo $uerro; ?></td>
		
			</tr>
			
			<tr>

				
				</td><td>
					<td><input type="submit" name="submit"value ="submit"></td>
				
			</tr>
			
			
			

		</table>
	</form>


</body>
</html>





