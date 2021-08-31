<!DOCTYPE html>
<html>
<head>
	<title>Show Student</title>
</head>
<body>
	<?php

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'my_db';

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Connection Failed..". mysqli_connect_error());
	}

	$sql = "SELECT * FROM student_p;";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		echo "<table border=2px style='width: 50%;'>
		<tr>
		<th>Enrolment No.</th>
		<th>Name</th>
		<th>Age</th>
		<th>City</th>
		</tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$enrl = $row['enroll_no'];
			echo "
			<tr>
			<td>".$row['enroll_no']."</td>
			<td>".$row['name']."</td>
			<td>".$row['age']."</td>
			<td>".$row['city']."</td>
			<td><a href='delete.php?enrl=$enrl'>Remove</a></td>
			</tr>
			";
		}
		echo "</table>";

		echo "<br><br><a href='add_student.php'>Back</a>";
	}else{
		echo "<h1>0 Results !!</h1>";
		echo "<br><br><a href='add_student.php'>Back</a>";
	}

	mysqli_close($conn);
	?>
</body>
</html>


