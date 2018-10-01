<?php
include 'connect.php';

$conn = mysqli_connect("localhost","root","","details");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$sql = "INSERT INTO details VALUES('$name','$phone','$email')";
if(mysqli_query($conn,$sql))
	echo "Values inserted Successfully<br>";
else
	echo "Error inserting Values <br>" . mysqli_error($conn);

echo "<br>Click below to go back";
echo "<br><a href=\"index.html\">Home</a>";

mysqli_close($conn);
?>