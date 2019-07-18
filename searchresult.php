<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['user_type']!="admin"){
  header("location:LoginSys.php");
}

 ?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <h1> Search Data</h1>
  </div>





  <table border=0 align=center bgcolor="#0000FF">
  <h1 align=center style="font-size:60px;">Purchase</h1>
  </tr>

  </table>
  <hr />
  <?php
  include('dbconnect.php');
  require_once('dbconnect.php');

  $con=mysqli_connect("localhost","root","","db1");
  $txtbarcode = $_POST['barcode'];
  //$user = $_POST['user'];
  //$txtbarcode=$_POST['barcode'];
  $sql_item = "SELECT * FROM barcode where id='".$txtbarcode."'";
  $sql_sold = "SELECT * FROM report where id='".$txtbarcode."'";
  //$result=mysql_query("SELECT * from barcode where itemcode='".$txtbarcode."'");
  $result = mysqli_query($conn, $sql_item);
  $result_sold = mysqli_query($conn, $sql_sold);

  if (mysqli_num_rows($result) > 0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
    $newDate = date("d M Y, h:i:s A", strtotime($row['date']));
  	echo "<center><table border=1>";
      echo"<tr><th>ITEM CODE</th><th>ITEM</th><th>PRICE (RM)</th><th>DATE</th><th>SCANNED BY</th></tr>";
  echo"<tr>";
  //echo "<td align= center>".$row['itemcode']."</td>";
  echo "<td align= center>".$row['id']."</td>";
  echo "<td align=center>".$row['item']."</td>";
  //echo "<td align=center>".$row['qty']."</td>";
  //echo "<td align=center>".$row['srp']."</td>";
  echo "<td align=center>".$row['markup']."</td>";
  echo "<td align=center>".$newDate."</td>";
  echo "<td align=center>".$row['user']."</td>";
  //echo "<td align=center>".$row['sp']."</td>";

  }

  }
  else if(mysqli_num_rows($result_sold) > 0)
  {
  while($row=mysqli_fetch_assoc($result_sold))
  {
    $newDate = date("d M Y, h:i:s A", strtotime($row['date']));
  	echo "<center><table border=1>";
      echo"<tr><th>ITEM CODE</th><th>ITEM</th><th>PRICE (RM)</th><th>DATE</th><th>SCANNED BY</th></tr>";
  echo"<tr>";
  //echo "<td align= center>".$row['itemcode']."</td>";
  echo "<td align= center>".$row['id']."</td>";
  echo "<td align=center>".$row['item']."</td>";
  //echo "<td align=center>".$row['qty']."</td>";
  //echo "<td align=center>".$row['srp']."</td>";
  echo "<td align=center>".$row['markup']."</td>";
  echo "<td align=center>".$newDate."</td>";
    echo "<td align=center>".$row['user']."</td>";
  //echo "<td align=center>".$row['sp']."</td>";

  }

  }
  echo "</table>";

  echo"</tr>";



  ?>


</body>


</html>
