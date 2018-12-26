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
    <th>comp_id</th>
		<th>company_name</th>
		<th>phone no</th>
		<th>post</th>
		<th>location</th>
	</tr>
	<?php
	$conn=mysqli_connect("localhost","root","","jobwalks");
	if($conn-> connect_error){
	die("connection failed:". $conn->connect_error);
	}
    $sql = "SELECT comp_id,comp_name,phone_no,post,location from company";
    $result = $conn-> query($sql);

    if($result->num_rows > 0){
    while($row = $result-> fetch_assoc()) {
    echo "<tr><td>".$row["comp_id"]."</td><td>".$row["comp_name"]."</td><td>".$row["phone_no"]."</td><td>".$row["post"]."</td><td>".$row["location"]."</td></tr>";
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