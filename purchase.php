<html>
<body>
<table border=0 align=center bgcolor="#0000FF">
<h1 align=center style="font-size:60px;">Purchase</h1>
</tr>

</table>
<hr />
<?php
session_start();
include('dbconnect.php');
//require_once('dbconnect.php');

$con=mysqli_connect("localhost","root","","db1");
$txtbarcode = $_POST['barcode'];
//$user = $_POST['user'];
//$txtbarcode=$_POST['barcode'];
//$id = (int)$_GET['id'];
$user_id = $_SESSION['ID'];
$user_name = $_SESSION['username'];
$scanned_user = "(".$user_id.") ".$user_name;
$sql = "SELECT * FROM barcode where id='".$txtbarcode."'";
//$result=mysql_query("SELECT * from barcode where itemcode='".$txtbarcode."'");
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	echo "<center><table border=1>";
    echo"<tr><th>ITEM CODE</th><th>ITEM</th><th>PRICE (RM)</th><th>DATE</th><th>ACTION</th></tr>";
echo"<tr>";
//echo "<td align= center>".$row['itemcode']."</td>";
echo "<td align= center>".$row['id']."</td>";
echo "<td align=center>".$row['item']."</td>";
//echo "<td align=center>".$row['qty']."</td>";
//echo "<td align=center>".$row['srp']."</td>";
echo "<td align=center>".$row['markup']."</td>";
echo "<td align=center>".$row['date']."</td>";
//echo "<td align=center>".$row['sp']."</td>";

$txtid=$row['id'];
$txtitem=$row['item'];
$txtqty=$row['qty'];
//$txtsrp=$_POST['srp'];
$txtmarkuprate=$row['markup'];
$txtsp=$row['sp'];
$myDate = $row['date'];

		 $sql_report="INSERT INTO report(id,item,markup,sp,date,user) VALUES ('".$txtid."','".$txtitem."','".$txtmarkuprate."','".$txtsp."','".$myDate."','".$scanned_user."')"; //insert data
         $insert = mysqli_query($con , $sql_report);
		 $sql_delete="DELETE FROM barcode where id='".$txtbarcode."'";
         $delete = mysqli_query($con , $sql_delete);

echo '<form action="scan.php" method="post">
			<td colspan=2 align=center>
            <input type="submit" value="submit">
			<input type="reset" value="cancel">
        </form>';
echo"</tr>";

}

}
else
	echo "<script> alert('Item Already Purchased');
      window.location.href='scan.php';
      </script>";
echo "</table>";

echo"</tr>";





?>
</body>
</html>
