<?php
session_start();
$servername = "localhost";
$uname = "root";
$password = "1122";
$dbname = "ruangong";

$username = $_POST["userid"];
$pwd = $_POST["password"];

// ��������
$conn = new mysqli($servername, $uname, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("����ʧ��: " . $conn->connect_error);
} 
 
$sql = "SELECT * FROM user where name = '$username' and psw = '$pwd'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) 
{
    // �������
    while($row = $result->fetch_assoc()) 
	{
		$_SESSION["username"] = $rows["name"];
		$_SESSION["userid"] = $rows["id"];
		header("Location: home.html");
    }
} 
else 
{
    echo "0 results";
}
$conn->close();
?>

