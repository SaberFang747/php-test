

<html>
<head>
<link rel="stylesheet" type="text/css" href="detailsstyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>DetailsDB</title>
</head>

<body>
<div class = "container">
<table class="table" style="margin-top: 30px;">
	<tr class="table-light">
	<th class=tdroll>Sl No.</th>
	<th class=tdname>Name</th>
	<th class=tdname>Phone</th>
	<th class=tdname>E-Mail</th>
	</tr>

<?php
include 'connect.php';
$name=$_REQUEST['q'];
if(strcmp($name,"ALL")===0)
	$sql="SELECT * FROM details";
else
	$sql="SELECT * FROM details WHERE name = '$name'";

$result = mysqli_query($conn,$sql);
$count = 0;
$arr=array();
while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;
		$count++;
	}
for($i=0;$i<$count;$i++)
	{
		echo "<tr class=\"table-light\">";
		echo "<td class=\"tdroll\">".($i+1)."</td>";
		echo "<td class=\"tdname\">".$arr[$i]['name']."</td>";
		echo "<td class=\"tdname\">".$arr[$i]['phone']."</td>";
		echo "<td class=\"tdname\">".$arr[$i]['email']."</td>";
		echo "</tr>";
	}
mysqli_close($conn);
?>

</table>
</div>
</body>

</html>