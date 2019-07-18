<?php
require_once('dbconnect.php');
$id = $_REQUEST['id'];
$sql= "SELECT * FROM barcode where id=".$id ;
//$result = mysqli_query("SELECT * FROM barcode where id=".$id);
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result))
{

?>
<html>
<body>
<form name="frm" method="POST" action="updateitem.php">
<table>
<table border=1 align=center>
<tr>
<td>
<table>
<tr>
<td> ITEM CODE:</td><td><INPUT type="text" name="txtitemcode" value="<?php echo $row['itemcode']?> "> </td></tr>
<tr>
<td> ITEM:</td><td><INPUT type="text" name="txtitem" value="<?php echo $row['item']?> "> </td></tr>
<tr>
<td> PRICE (RM):</td><td><INPUT type="text" name="txtmarkuprate" value="<?php echo $row['markup']?> "> </td>
<td><INPUT type="hidden" name="id" value=<?php echo $row['id']?>" /> </td>
</tr>
<tr>


<tr><td colspan=2><center><INPUT type="submit" value="Update" />
<INPUT type="button" value="Back"
onClick="window.location.href='item.php'" /></center></td></tr>
</table>
</form>
</html>
</body>
<?php } ?>
