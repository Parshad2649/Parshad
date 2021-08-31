<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'my_db';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("Connection Failed..". mysqli_connect_error());
}

$enrl = $_REQUEST["enrl"];

$sql = "DELETE FROM student_p WHERE enroll_no = '$enrl';";
if(mysqli_query($conn, $sql))
{
    header('Location: student.php');
}
mysqli_close($conn);
?>
