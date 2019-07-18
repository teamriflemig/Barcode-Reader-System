<html>
<style>
#items {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width: 100%;
}

#items td, #items th {
	border: 1px solid #ddd;
	padding: 8px;
}

#items tr:nth-child(even){background-color: #f2f2f2;}

#items tr:hover {background-color: #ddd;}

#items th {
	padding-top: 12px;
	padding-bottom: 12px;
	text-align: left;
	background-color: #333333;
	color: white;
}
</style>
<body>
<form action=scanreceive.php method=POST>
<table border=0 align=center bgcolor="#0000FF">
<tr><td>ENTER BARCODE</td><td><input type="text" name="barcode" onmouseover="this.focus();"/></td>
</tr>

</table>
</form>
<?php
require_once('dbconnect.php');
$barcode=$_POST['barcode'];
$sql = "SELECT * FROM barcode where id='".$barcode."'";
//$result=mysql_query("SELECT * from barcode where itemcode='".$txtbarcode."'");
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	echo "<center><table border=1 id=items>";
    echo"<tr><th>ITEM CODE</th><th>ITEM</th><th>PRICE (RM)</th><th>DATE</th><th>ACTION</th></tr>";
echo"<tr>";
//echo "<td align= center>".$row['itemcode']."</td>";
echo "<td align= center>".$row['id']."</td>";
$_SESSION['id'] = $row['id'];
echo "<td align=center>".$row['item']."</td>";
$_SESSION['item'] = $row['item'];
//echo "<td align=center>".$row['qty']."</td>";
//echo "<td align=center>".$row['srp']."</td>";
echo "<td align=center>".$row['markup']."</td>";
$_SESSION['markup'] = $row['markup'];
echo "<td align=center>".$row['date']."</td>";
$_SESSION['date'] = $row['date'];
//echo "<td align=center>".$row['sp']."</td>";
echo '<form action="add.php" method="post">
			<td colspan=2 align=center>
            <input type="submit" value="add">
			<input type="reset" value="cancel">
        </form>';
echo"</tr>";
}
}
else
	echo"not found";
echo "</table>";

/*if ($_POST['add'])
{
    echo "You entered the number " . $_POST['add'];
	echo "<center><table border=1>";
    echo"<tr><th>ITEM CODE</th><th>ITEM</th><th>PRICE (RM)</th><th>DATE</th><th>ACTION</th></tr>";
echo"<tr>";
//echo "<td align= center>".$row['itemcode']."</td>";
echo "<td align= center>".$row['id']."</td>";
echo "<td align=center>".$row['item']."</td>";
//echo "<td align=center>".$row['qty']."</td>";
//echo "<td align=center>".$row['srp']."</td>";
echo "<td align=center>".$row['markup']."</td>";
//echo "<td align=center>".$row['sp']."</td>";
echo "<td align=center>".$row['date']."</td>";
echo '<form action="aaa.php" method="post">
            <td align=center input type="submit" value="Edit" <input type="reset" value="cancel">
        </form>';
echo"</tr>";
}
*/


?>
</body>
</html>
