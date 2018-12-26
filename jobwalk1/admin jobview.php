<!DOCTYPE html>
<html>
<head>
	<title>job posted</title>
</head>
<body>
<table>
   <style>
   	table {
   		border-collapse: collapse;
   		width: 100%;
   		color: #d96459;
   		font-family: monospace;
   		font-size: 25px;
   		text-align: left;
   	}
   	th {
   		background-color: #588c7e;
   		color: white;
   	}
   	tr:nth-child(even) {background-color: #f2f2f2}
   </style>
	<tr>
		<th>job_id</th>
		<th>job_type</th>
		<th>job_name</th>
		<th>job_desc</th>
		<th>salary</th>
	</tr>
	<?php
	$conn=mysqli_connect("localhost","root","","jobwalks");
	if($conn-> connect_error){
	die("connection failed:". $conn->connect_error);
	}
    $sql = "SELECT job_id,job_type,job_name,job_desc,salary from job";
    $result = $conn-> query($sql);

    if($result->num_rows > 0){
    while($row = $result-> fetch_assoc()) {
    echo "<tr><td>".$row["job_id"]."</td><td>".$row["job_type"]."</td><td>".$row["job_name"]."</td><td>".$row["job_desc"]."</td><td>".$row["salary"]."</td></tr>";
    }
    echo "</table>";
    }
    else {
    echo "0 result";
  }
    $conn-> close();
	?>
</table>
</body>
</html>