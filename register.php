<?php
session_start();
$tablename = "user_register";
$server = "localhost:3307";
$user = "root";
$pass = "aayushi1304";
$database = "ad_uni";
$con = mysqli_connect($server,$user,$pass,$database);
if(!$con)
{
 dir("Connection unsuccessfull due to error: ".mysqli_connect_error());
}
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];
$model = $_POST['model'];
$car_number = $_POST['car_number'];
$query = "insert into `".$database."`.".$tablename."
values('$email','$contact_no','$model','$car_number')";
if($con->query($query) == true)
{
 echo "<center><h3>Values Inserted Successfully </h3></center>";
 echo "<center><h4>Values Inserted Are </h4></center>";
 echo "<center><table><tr><td>Email </td><td>$email</td>";
 echo "<tr><td>Contact no </td><td>$contact_no</td></tr>";
 echo "<tr><td>Model </td><td>$model</td></tr>";
 echo "<tr><td>Car number</td><td>$car_number</td></tr></table></center>"; 
}
else
{
 echo "Error: $conn->error";
}
?>