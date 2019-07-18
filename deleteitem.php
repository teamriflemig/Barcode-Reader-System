<html>
<body bgcolor=white>
<?php
$con=mysqli_connect("localhost","root","","db1");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM barcode WHERE id='".$id."'");
mysqli_close($con);

echo "<script> alert('1 record deleted');
window.location.href='item.php';
</script>";
?>
</body>
</html>
