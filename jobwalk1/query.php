<?php


$connect = mysqli_connect("localhost","root","","jobwalks");

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$query = $_REQUEST['post_query'];
$table = $_REQUEST['post_table'];

switch($table){
	case "job":
	$query_result = mysqli_query($connect,$query);

	// Associative array
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>Job Id</th>
			<th>Job Type</th>
			<th>Job Name</th>
			<th>Job Desc</th>
			<th>Salary</th>
			<th>Admin Id</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['job_id']."</td>
			<td>".$row['job_type']."</td>
			<td>".$row['job_name']."</td>
			<td>".$row['job_desc']."</td>
			<td>".$row['salary']."</td>
			<td>".$row['admin_id']."</td>
		</tr>";

	}
	echo "</table>";
	break;

	case "admin":
	$query_result = mysqli_query($connect,$query);

	//
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>Admin Id</th>
			<th>Admin Name</th>
			<th>Job Name</th>
			<th>Job Desc</th>
			<th>Salary</th>
			<th>Admin Id</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['admin_id']."</td>
			<td>".$row['admin_name']."</td>
			<td>".$row['phone_no']."</td>
			<td>".$row['email_id']."</td>
			<td>".$row['address']."</td>
			<td>".$row['user_id']."</td>
		</tr>";

	}
	echo "</table>";
	break;


	case "company":
	$query_result = mysqli_query($connect,$query);

	// Associative array
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>company_id</th>
			<th>company_Name</th>
			<th>phone_no</th>
			<th>post</th>
			<th>location</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['comp_id']."</td>
			<td>".$row['comp_name']."</td>
			<td>".$row['phone_no']."</td>
			<td>".$row['post']."</td>
			<td>".$row['location']."</td>
		</tr>";

	}
	echo "</table>";
	break;



case "job_seeker":
	$query_result = mysqli_query($connect,$query);

	// Associative array
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>Id</th>
			<th>Name</th>
			<th>phone_no</th>
			<th>email_id</th>
			<th>language_known</th>
			<th>password</th>
			<th>resume_id</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['name']."</td>
			<td>".$row['phone_no']."</td>
			<td>".$row['email_id']."</td>
			<td>".$row['language_known']."</td>
			<td>".$row['password']."</td>
			<td>".$row['resume_id']."</td>
		</tr>";

	}
	echo "</table>";
	break;


case "company_login":
	$query_result = mysqli_query($connect,$query);

	// Associative array
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>company_d</th>
			<th>user_id</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['comp_id']."</td>
			<td>".$row['user_id']."</td>
		</tr>";

	}
	echo "</table>";
	break;

case "jobseeker_login":
	$query_result = mysqli_query($connect,$query);

	// Associative array
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>Id</th>
			<th>user_id</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['user_id']."</td>
		</tr>";

	}
	echo "</table>";
	break;


	case "job_company":
	$query_result = mysqli_query($connect,$query);

	// Associative array
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>job_id</th>
			<th>comp_id</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['job_id']."</td>
			<td>".$row['comp_id']."</td>
		</tr>";

	}
	echo "</table>";
	break;

	case "job_jobseeker":
	$query_result = mysqli_query($connect,$query);

	// Associative array
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>Id</th>
			<th>job_id</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['job_id']."</td>
		</tr>";

	}
	echo "</table>";
	break;

case "login":
	$query_result = mysqli_query($connect,$query);

	// Associative array
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>user_id</th>
			<th>password</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['user_id']."</td>
			<td>".$row['password']."</td>
		</tr>";

	}
	echo "</table>";
	break;


	case "resume":
	$query_result = mysqli_query($connect,$query);

	// Associative array
	echo "<pre>";
	echo "<table border='1'>
			<tr>
			<th>resume_id</th>
			<th>details</th>
			</tr>
	";
	while($row=mysqli_fetch_assoc($query_result)){
		//print_r($row);
		echo "<tr>
			<td>".$row['resume_id']."</td>
			<td>".$row['details']."</td>
		</tr>";

	}
	echo "</table>";
	break;

}

?>


<form id="query_maker" action="query.php">
	<label>Query:</label><input type="text" name="post_query"><br>
	<label>Table:</label><input type="text" name="post_table">
	<input type="submit" value="Submit"><br>
</form>