<?php
ini_set('display_errors',0);

if(isset($_POST['reg']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "jobwalks";
    

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone_no = $_POST['phone_no'];
    $email_id = $_POST['email_id'];
    $language_known = $_POST['language_known'];
    $password = $_POST['password'];
    $resume_id = $_POST['resume_id'];

    


    //$connect = mysqli_connect($servername, $username, $password, $databaseName);

    $connect = mysqli_connect("localhost","root","","jobwalks");

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }


    // mysql query to insert data

    $query = "INSERT INTO job_seeker(id, name, phone_no, email_id, language_known, password,resume_id) VALUES ('$id','$name','$phone_no','$email_id','$language_known','$password','$resume_id')";
    
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
 <input type="text" placeholder="id" name="id"><br>
<input type="text" placeholder="name" name="name"><br>
<input type="text" placeholder="phone_no" name="phone_no"><br>
<input type="email" placeholder="email_id" name="email_id"><br>
<input type="text" placeholder="language_known" name="language_known"><br>
<input type="password" placeholder="password" name="password"><br>
<input type="resume_id" placeholder="resume_id" name="resume_id"><br>
<input type="Submit" value="Register" name="reg"><br>

</div>
</header>
</body>
</html>