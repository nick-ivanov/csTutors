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
				<a href="home_tutor.php"><h1><center>
					On-Demand Tutors
				</center></h1></a>
			</div>
            <ul id="top-navigation">
                <h3>
				<li><a href="about_tutor.php">About Us</a></li>
                <li><a href="tutorDashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
				</h3>
            </ul>
        </div>
        <div id="middle">
            <div id="center-column">
                <div class="top-bar">
                    <h1>Lesson Information</h1><br>
                </div>
				                
                <div class="table">
                    <form action='enterLessonData.php' method='POST' >
						<table class="listing form" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<th class="full" colspan="2">Enter Lesson Information</th>
								</tr>
								<tr>
									<td width="172"><strong>Student Name:</strong></td>
									<td><input type="text" class="text" name='studentName'></td>
								</tr>
								<tr>
									<td><strong>Course/Subject:</strong></td>
									<td><input type="text" class="text" name='course'></td>
								</tr>
								<tr>
									<td><strong>Semester:</strong></td>
									<td><input type="text" class="text" name='semester'></td>
								</tr>
								<tr>
									<td><strong>Date:</strong></td>
									<td><input type="text" class="text" name='lessonDate'></td>
								</tr>
								<tr>
									<td><strong>Start Time:</strong></td>
									<td><input type="text" class="text" name='startTime'></td>
								</tr>
								<tr>
									<td><strong>End Time: </strong></td>
									<td><input type="text" class="text" name='endTime'></td>
								</tr>
							</tbody>
						</table>
						<p><input type='submit' name = 'submit' value='Submit'></p>
					</form>
                </div> <!-- end #table -->
				
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
	$sql1 = "INSERT INTO LESSON ('StudentName', 'Course', 'Semester', 'LessonDate', 'StartTime', 'EndTime') VALUES ('$_POST[studentName]', '$_POST[course]', '$_POST[semester]', '$_POST[lessonDate]', '$_POST[startTime]', '$_POST[endTime]')" ;
	if($sql1 && $_POST[studentName] != "" && $_POST[course]!="" && $_POST[semester]!="" && $_POST[lessonDate]!="" && $_POST[startTime]!="" && $_POST[endTime]!="")
	
		echo "\nInformation entered!";
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