<html>
<head>
    <title>On-Demand Tutors</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link href="css/admin.css" rel="stylesheet" type="text/css">
	<link href="css/twoColFixLtHdr.css" rel="stylesheet" type="text/css">
	
</head>
<body>
    <div id="main">
	<div id="container">
		<div id="header">
			<div id="heading">
				<a href="login.php"><h1><center>
					On-Demand Tutors
				</center></h1></a>
			</div>
            <ul id="top-navigation">
                <h3>
				<li><a href="about_Login.php">About Us</a></li>
                <li><a href="howItWorks.php">How it Works</a></li>
                </h3>
            </ul>
        </div>
        <div id="middle">
            <div id="center-column">
                <div class="top-bar">
                    <br><br><h1>Log In to the On-Demand Tutoring System of<br />Southwest Minnesota State University </h1>
                    <br><br>
					
					<div id="login">
					<form action='index.php' method='POST'>
						<table class="listing form" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
								<div>
									<h1 style="font-size:15px;"> Are you a ?
										<br> Tutor           <input type='radio' name='role' value='tutor' /> 
										<br> Student Visitor <input type='radio' name='role' value='student'/> 
										<br> Administrator   <input type='radio' name='role' value='admin'/> 
									</h1>
								</div>
								</tr>
								<tr>
									<td><strong>Username:</strong></td>
									<td><input type="text" class="text" id='username' name='username'></td>
								</tr>
								<tr>
									<td><strong>Password: </strong></td>
									<td><input type="password" class="text" id='password' name='password'></td>
								</tr>
							</tbody>
						</table>
						<p><input type='submit' name = 'submit' value='Login'></p>
					</form>
					</div>
                </div>
	
<?php
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
// Turn off error reporting
//error_reporting(0);
// Report runtime errors
//error_reporting(E_ERROR | E_WARNING | E_PARSE);


$user = 'root';
$pass = '';
$db = 'comptutor';

$conn = new mysqli('localhost', $user, $pass, $db);
 if ($conn->connect_errno > 0)
 {
  echo "Failed to connect to Server. Please try again. ";
  die('Unable to connect to database [' . $db->connect_error . ']');
 }

if (isset($_POST['submit']))
{
	$role = $_POST['role'];
	$table = $_POST['role'];
	$sql1 = "SELECT MemberId FROM MEMBERS WHERE Username='$_POST[username]' and  Password='$_POST[password]' and Role ='$_POST[role]'";
	$result = mysqli_query($conn,$sql1);
	if ($role == "")
		echo "\nPlease select a Member Category.";
	else
	{
		if(mysqli_num_rows($result)>0)
		{
			//Redirect to respective dashboard
			header('Location:'.$role.'Dashboard.php');
		}
		else
			echo "\nInvalid credentials. Please enter again."; 
	}
}
?>

			</div> <!-- end #center -->
		</div>  <!-- end #middle -->
        <div id="footer">
			<p>
				Department of Computer Science <br>
				University&copy;2016
		</p>
		</div>
    </div> <!-- end #container -->
	</div> <!-- end #main --></div>
</body>
</html>