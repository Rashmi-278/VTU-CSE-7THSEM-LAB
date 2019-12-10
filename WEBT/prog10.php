<!DOCTYPE html>
<html>
<head>
	<title>1JS16CS081 PROG10</title>
</head>
<body>
<style type="text/css">
	table,th,tr{
		border:2px solid black;
		text-align:center;
		width:33%;
		border-collapse:collapse;
		background-color:lightblue;
	}
	table{margin: auto;}

</style>
<?php 

$a=array();

$conn = mysqli_connect("localhost","root","","student");
if($conn->connect_error)
{
	die("ERROR".$conn->connect_error."<br>");
}

$sql = "SELECT * FROM learner";

$result = $conn->query($sql);

echo "BEFORE SORTING <br>";
echo "<table>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>ADDR</th>";
echo "</tr>";

if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$row['usn']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['addr']."</td>";
		echo "</tr>";
		array_push($a,$row['usn']);
	}


}
else
{
	echo "TABLE IS EMPTY";	
}

echo "</table>";

$n = count($a);
$b = $a;

for($i = 0;$i<($n-1);$i++)
{
	for($j=$i+1; $j<$n ; $j++)
	{
		if($a[$i]>$a[$j])
		{
			$temp = $a[$i];
			$a[$i] = $a[$j];
			$a[$j] = $temp;
		}
	}

}

$results = $conn->query($sql);


if($results->num_rows>0)
{
	while($row = $results->fetch_assoc())
	{
		
		for($i = 0;$i<$n;$i++)
		{	
			if($a[$i] == $row['usn'])
			{
				$c[$i] = $row['name'];
				$d[$i] = $row['addr'];
			}


		}
	}


}

echo "BEFORE SORTING <br>";
echo "<table>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>ADDR</th>";
echo "</tr>";
for($i = 0;$i<$n;$i++)
{
	echo "<tr>";
		echo "<td>".$a[$i]."</td>";
		echo "<td>".$c[$i]."</td>";
		echo "<td>".$d[$i]."</td>";
		echo "</tr>";
}

echo "</table>" ; 

 ?>
</body>
</html>
