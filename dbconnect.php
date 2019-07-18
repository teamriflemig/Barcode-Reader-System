<?php
//$con= mysql_connect("localhost","root","") or die("Cannot connect. Check your Web Server.");
//mysql_select_db("db1",$con) or die ("Cannot connect to the database. Please check your host Connection");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

/* Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/
?>