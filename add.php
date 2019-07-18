<?php
include('dbconnect.php');
$con=mysqli_connect("localhost","root","","db1");
$id = isset($_GET['id']) ? $_GET['id'] : '';
$txtitem=$_POST['item'];
$txtqty=$_POST['qty'];
//$txtsrp=$_POST['srp'];
$txtmarkuprate=$_POST['markuprate'];
$txtsp=$txtqty*$txtmarkuprate;
$myDate = date("Y-m-d H:i:s");
$user = $_POST['user'];

$sql="INSERT INTO barcode(item,markup,sp,date,user) VALUES ('".$txtitem."','".$txtmarkuprate."','".$txtsp."','".$myDate."','".$user."')"; //insert data
//$insert = mysqli_query($con , $sql);

$check=mysqli_query($con,"select * from barcode where id='".$id."'");
//and item='$txtitem'"
$checkrows=mysqli_num_rows($check);

if($checkrows>0)
{
	//Data Exist
      echo "<script> alert('Data Already Exist');
window.location.href='index.php';
</script>";
}  else
    //Insert data
	for($i=1;$i<$txtqty;$i++)
	{
      //$sql="INSERT INTO barcode(item,qty,markup,sp,date) VALUES ('".$txtitemcode."','".$txtitem."','".$txtqty."','".$txtmarkuprate."','".$txtsp."','".$myDate."')";
	  mysqli_query($con , $sql);
	}
	 //$txtqty = mysqli_query($con , $sql);
	  if (mysqli_query($con, $sql)) {
	  echo "<script> alert('New record created successfully');
      window.location.href='item.php';
      </script>";
	  }
mysqli_close($conn);


?>
