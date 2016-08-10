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
				<a href="home_admin.php"><h1><center>
					On-Demand Tutors
				</center></h1></a>
			</div>
            <ul id="top-navigation">
                <h3>
				<li><a href="about_admin.php">About Us</a></li>
                <li><a href="adminDashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
				</h3>
            </ul>
        </div>
        <div id="middle">
            <div id="center-column">
                <div class="top-bar">
                    <br><br><h1> View Statistics Reports </h1></a>
						<!--br><a href="perDayReport.php"><h1 style="font-size:15px"> Per Day </h1></a>
						<br><a href="perCourseReport.php"> <h1 style="font-size:15px"> Per Course </h1> </a-->
						<br><a href="perTutorReport.php"> <h1 style="font-size:15px"> Per Tutor </h1> </a>
					</h1>
                </div>
				
<?php
/*

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
*/
?>
				
		    </div>
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