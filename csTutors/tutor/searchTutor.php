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
				<a href="home_student.php"><h1><center>
					On-Demand Tutors
				</center></h1></a>
			</div>
            <ul id="top-navigation">
                <h3>
				<li><a href="about_student.php">About Us</a></li>
                <li><a href="studentDashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
				</h3>
            </ul>
        </div>
        <div id="middle">
            <div id="center-column">
                <div class="top-bar">
                    <h1>Search for Tutors </h1><br>
                </div>
				                
                <div class="table">
                    <form action='searchTutor.php' method='POST' >
						<table class="listing form" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td><strong>Tutor Name:</strong></td>
									<td><input type="text" class="text" name='st'></td>
								</tr>
								<tr>
									<td><strong>Rating: </strong></td>
									<td><input type="text" class="text" name='et'></td>
								</tr>
							</tbody>
						</table>
						<p><input type='submit' name = 'submit' value='Submit'></p>
					</form>
                </div> <!-- end #table -->
				
<?php

$user = 'root';
$pass = '';
$db = 'comptutor';

$conn = new mysqli('localhost', $user, $pass, $db);
 if ($conn->connect_errno > 0)
 {
  echo "Failed to connect to MySQL: ";
  die('Unable to connect to database [' . $db->connect_error . ']');
 }

if (isset($_GET['submit']))
{
$insert1 = "INSERT INTO schd (Day,Room,Course,Starttime, Endtime, IPadd, LED) VALUES ('$_GET[day]', '$_GET[room]', '$_GET[course]', '$_GET[st]', '$_GET[et]', '$_GET[ip]','$_GET[led]')" ;
$sql = mysqli_query($conn,$insert1);
$insert = mysqli_query($conn,"INSERT INTO status (Day,Room,Starttime,LEDno,Status) VALUES ('$_GET[day]', '$_GET[room]','$_GET[st]','$_GET[led]', 'OFF') " );
if($sql)
	echo "\nSchedule Updated!";
else
	echo "\nError in updating! Please re-enter correct data";
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