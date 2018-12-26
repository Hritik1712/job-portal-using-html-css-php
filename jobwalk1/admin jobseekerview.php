<!DOCTYPE html>
<html>
<head>
	<title>job seeker</title>
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
		<th>id</th>
		<th>name</th>
		<th>phone_no</th>
		<th>email_id</th>
		<th>language_known</th>
	</tr>
	<?php
  $conn=mysqli_connect("localhost","root","","jobwalks");
  if($conn-> connect_error){
  die("connection failed:". $conn->connect_error);
  }
    $sql = "SELECT id,name,phone_no,email_id,language_known from job_seeker";
    $result = $conn-> query($sql);

    if($result->num_rows > 0){
    while($row = $result-> fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["phone_no"]."</td><td>".$row["email_id"]."</td><td>".$row["language_known"]."</td></tr>";
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