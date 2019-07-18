<html>
<head>
  <title>Control Item</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet"  type="text/css"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }
  function closeSlideMenu(){
    document.getElementById('side-menu').style.width = '0';
    document.getElementById('main').style.marginLeft = '0';
  }
  </script>
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

</head>
<body>
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
          <path d="M0,5 30,5" stroke="#fff"
          stroke-width="5"/>
          <path d="M0,14 30,14" stroke="#fff"
          stroke-width="5"/>
          <path d="M0,23 30,23" stroke="#fff"
          stroke-width="5"/>
        </svg>
      </a>
    </span>

  <div class="navbar-centered">
    <h1 style="font-size:20px" ><font color="white" style="font-family:arial">Admin Panel </font></h1>
  </div>

  <ul class="navbar-nav" padding="left">
    <li><a href="logout.php"> Logout</a></li>
  </ul>
  </nav>

  <div id="side-menu" class="side-nav">
  <a hredf="#" class="btn-close" onclick="closeSlideMenu()" style="color: rgb(255,255,255)">&times;</a>
  <a href="BarcodeHome.php"> Home</a>
  <a href="registration.php"> Registration</a>
  <a href="item.php"> Item</a>
  <a href="/barcode/koolreport_example/examples/reports/datasources/mysql_report/"> Statistics</a>
  <a href="controlaccount.php"> Control Account</a>
  </div>
  <div id="main">
  <h1> Insert Item</h1>
  </div>





<form action="add.php" method="POST">
<table > <!--border=0 align=center bgcolor="#9FA6A6">-->
<tr>
<!--<<td>ITEM CODE</td><td><input type="text" name="itemcode" autocomplete="off" /></td></tr>-->
<tr><td>ITEM</td><td><input type="text" name="item" autocomplete="off" /></td></tr>
<tr><td>QTY</td><td><input type="text" name="qty" autocomplete="off" /></td></tr>
<!--<tr><td>SRP</td><td><input type="text" name="srp" /></td></tr>-->
<tr><td>PRICE (RM)</td><td><input type="text" name="markuprate" autocomplete="off" /></td></tr>
<tr><td colspan=2 align=center><button class="btn btn-outline-secondary" ><input type=submit value=add></button><button class="btn btn-outline-secondary"><input type=reset value=cancel>
</button></table>


</form>
<html>
<body>
<?php
require_once('dbconnect.php');
$sql = "SELECT * FROM barcode order by date DESC";
$result = mysqli_query($conn, $sql);
//$result=mysql_query("SELECT * from barcode order by id");
//$sql = mysqli_query($OpenCon, "SELECT * from barcode order by id");
?>
<center><table  id="items">
<?php
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
echo"<td> <a class='btn btn-info' href='edititem.php?id=".$row['id']."'>EDIT</a>
<a class='btn btn-danger' href=deleteitem.php?id=".$row['id']."'>DELETE</a></td>";
echo"</tr>";
}
}
else
	{
    echo "0 results";
}
echo "</table>";
mysqli_close($conn);
?>
<?php require 'footer.php'; ?>
<div class="alignright">
  <button class="btn btn-outline-secondary" align=left><a href=scan.php>Scan</a></button>
  <button class="btn btn-outline-secondary" align=left><a href="/barcode/koolreport_example/examples/reports/datasources/mysql_report/">Report</a></button>
  <button class="btn btn-outline-secondary" align=left><a href=search.php>Search</a></button>
</div>
</body>
</html>
</body>
</html>
