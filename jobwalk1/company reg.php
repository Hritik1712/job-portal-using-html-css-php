<?php
ini_set('display_errors',0);

if(isset($_POST[reg]))
{
	$servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "jobwalks";


	$comp_id=$_POST['comp_id'];
	$comp_name=$_POST['comp_name'];
	$phone_no=$_POST['phone_no'];
	$email=$_POST['email'];
	$location=$_POST['location'];
	$password=$_POST['password'];

	$connect = mysqli_connect("localhost","root","","jobwalks");


	if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

	$query = "INSERT INTO company(comp_id, comp_name, phone_no, post, location) VALUES ('$comp_id','$comp_name','$phone_no','$post','$location')";
	
	$result = mysqli_query($connect,$query);

	if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);
}

?>

<html>
<head>
<title>Registration form</title>
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
<header>
   <div id="nav">
Registration Form
 <form action="#" method="post">
 <input type="text" name="comp_id" placeholder="comp_id"><br>
<input type="text" name="comp_name" placeholder="comp_name"><br>
<input type="numeric" name="phone_no" placeholder="phone_no" ><br>
<input type="email" name="email" placeholder="email"><br>
<input type="text" name="location" placeholder="location"><br>
<input type="password" name="password" placeholder="Enter Password"><br>
<input type="Submit" value="Register" name="reg"><br>
</div>
</header>
</body>
</html>
//php