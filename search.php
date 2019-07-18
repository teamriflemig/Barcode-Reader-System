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


  <form action=searchresult.php method=POST>
  <table border=0 align=center bgcolor="#0000FF">
  <tr><td>ENTER BARCODE</td><td><input type="text" name="barcode" onmouseover="this.focus();"/></td>
  </tr>
  <tr><td colspan=2 align=center><input type=submit value=search>

  </table>
  </form>
  <hr />

</body>


</html>
