<?php
include 'connect.php';
$email=$_POST['email'];
if(empty($email))
	echo "Please Give a Valid Name";
else
	$sql="DELETE FROM details WHERE email = '$email'";

if(mysqli_query($conn,$sql))
	echo "Row deleted Successfully<br>";
else
	echo "Error deleting Row <br>" . mysqli_error($conn);

echo "<br>Click below to go back";
echo "<br><a href=\"index.html\">Home</a>";

mysqli_close($conn);
?>