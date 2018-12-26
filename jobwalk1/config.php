<?php
$servername="localhost";
$username="root";
$password="";
$database="jobwalks";
$conn=new
mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
       die("connection failed :" .mysqli_connect_error());
}
echo "connected successfully";
?>