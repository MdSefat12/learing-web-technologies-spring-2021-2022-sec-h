<html>

<head>
	<title>Change Password</title>
</head>

<body>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="ra.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				Loggedin as | <a href="login.html"> Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td>
				<h4>Account</h4><br>
                <ul>
                    <li>
                        <a href="dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="viewProfile.html">View Profile</a>
                    </li>
                    <li>
                        <a href="editProfile.html">Edit Profile</a>
                    </li>
                    <li>
                        <a href="changeProfPic.html">Change Profile Picture</a>
                    </li>
                    <li>
                        <a href="changePass.html">Change Password</a>
                    </li>
                    <li>
                        <a href="login.html">Logout</a>
                    </li>
                </ul>
			</td>
            <td>
                <form method="" action="">
                    <fieldset style="width: 90%">
                        <legend>CHANGE PASSWORD</legend>
                        <table>
                            <tr>
                                <td>
                                    Current Password :
                                </td>
                                <td>
                                    <input type="password" name="currentPass" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td style="color: green">
                                    New Password :
                                </td>
                                <td>
                                    <input type="password" name="newPass" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td style="color:red">
                                    Retype New Password :
                                </td>
                                <td>
                                    <input type="password" name="rePass" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                            </tr>
            
                        </table>
                    </fieldset>
                </form>
            </td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				Copyright @ 2017
			</td>
		</tr>			
	</table>
</body>
</html>