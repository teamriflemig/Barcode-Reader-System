  <?php
  require_once('dbconnect.php');

  require_once "displayreport.php";
  $report = new SakilaRental;
  $report->run()->render();
  /*$sql = "SELECT * FROM barcode order by date DESC";
  $result = mysqli_query($conn, $sql);
  //$result=mysql_query("SELECT * from barcode order by id");
  //$sql = mysqli_query($OpenCon, "SELECT * from barcode order by id");
  echo "<center><table border=1>";
  echo"<tr><th>ITEM CODE</th><th>ITEM</th><th>PRICE (RM)</th><th>DATE</th><th>ACTION</th></tr>";
  if (mysqli_num_rows($result) > 0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
  echo"<tr>";
  echo "<td align= center>".$row['id']."</td>";
  echo "<td align=center>".$row['item']."</td>";
  //echo "<td align=center>".$row['qty']."</td>";
  //echo "<td align=center>".$row['srp']."</td>";
  echo "<td align=center>".$row['markup']."</td>";
  //echo "<td align=center>".$row['sp']."</td>";
  echo "<td align=center>".$row['date']."</td>";
  echo"<td> <a href='edit.php?id=".$row['id']."'>EDIT</a>
  <a href=delete.php?id=".$row['id']."'>DELETE</a></td>";
  echo"</tr>";
  }
  }
  else
  	{
      echo "0 results";
  }
  echo "</table>";
  mysqli_close($conn);*/
  ?>

</body>


</html>
