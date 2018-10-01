<?php
$conn = mysqli_connect("localhost","root","","details");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
?>