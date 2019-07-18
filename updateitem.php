<?php
require_once('dbconnect.php');
$con=mysqli_connect("localhost","root","","db1");

//$itemcode = $_POST['txtitemcode'];
$item = $_POST['txtitem'];
//$qty = $_POST['txtqty'];
$srp = $_POST['txtsrp'];
$markuprate = $_POST['txtmarkuprate'];
$txtsp=$qty*$markuprate;
//$id = $_POST['id'];
$id = (int)$_POST['id'];


mysqli_query($con,"UPDATE barcode SET timestamp=NOW() WHERE id='".$id."'");
mysqli_query($con,"UPDATE barcode SET timestamp=NOW() item='".$item."',qty='".$qty."',srp='".$srp."',markup='".$markuprate."',sp='".$txtsp."' WHERE id='".$id."'");

mysqli_close($con);
echo "<script> alert('1 record updated');
window.location.href='item.php';
</script>";
mysqli_close($con);
?>
