<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Add Vaccancy</title>
</head>
<body>


     <?php
  $conn=mysqli_connect("localhost","root","","jobwalks");
  if($conn-> connect_error){
  die("connection failed:". $conn->connect_error);
  }
    if(isset($_POST['submit'])){
        $sql = "INSERT INTO job (job_type, job_name, job_desc, salary, admin_id)
        VALUES ('".$_POST["job_type"]."','".$_POST["job_name"]."','".$_POST["job_desc"]."','".$_POST["salary"]."','".$_POST["admin_id"]."')";
    }
    ?>


    <form method="post"> 
    <label id="first"> Job_type:</label><br/>
    <input type="text" name="job_type"><br/>

    <label id="first">job_name:</label><br/>
    <input type="text" name="job_name"><br/>

    <label id="first">job_desc:</label><br/>
    <input type="text" name="job_desc"><br/>

     <label id="first">salary:</label><br/>
    <input type="text" name="salary"><br/>

     <label id="first">admin_id:</label><br/>
    <input type="numeric" name="admin_id"><br/>

    <br/>
    <button type="submit" name="submit'">submit</button>
    </form>

</body>
</html>