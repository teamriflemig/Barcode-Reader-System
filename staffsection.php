<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['user_type']!="staff"){
  header("location:LoginSys.php");
}

$user_id=$_SESSION['ID'];
$user_name= $_SESSION['name'];
 ?>

<html lang="en">
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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Staff Scan Section</title>
</head>
<body class="p-3 mb-2 bg-light text-dark">
  <nav class="navbar">
  <div class="navbar-centered">
    <h1 style="font-size:20px" ><font color="white" style="font-family:arial">Barcode Scan</font></h1>
  </div>

  <ul class="navbar-nav" padding="left">
    <li><a href="logout.php"> Logout</a></li>
  </ul>
  </nav>
<br>
  <div class="container-fluid">
    <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="staffsection.php">Scan Menu</a>
  </li>
</ul>
<li class="nav justify-content-end">
      <iframe  src="http://free.timeanddate.com/clock/i6u0lupa/n122/tlmy40/fn6/fs18/fcfff/tc22d/ftbi/bls0/brs0/bts4/btc00b/tt0/ta1" frameborder="0" width="365" height="29"></iframe>
</li>
</div>
<ul class="nav flex-column">
  <li class="nav-item">
  </li>
</ul>
<div class="col align-selft-start">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="5%" scope="col">ID</th>
          <th scope="col"> Counter Name</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <th width="10%" scope="row"><?php echo $_SESSION['ID'] ?></th>
            <td><?php echo $_SESSION['name'] ?></td>
          </tr>
      </tbody>
</div></table>

  <div class="container-fluid">
    <div class="p-3 mb-2 bg-light text-dark"><form action="scanpurchase.php" method=POST>
    <table border="3" width="25%">
      <label for="inputlg">Barcode No.</label>
      <th>Enter Barcode</th><br>
      <td><input autocomplete="off" class="form-control input-lg" size="30" type="text" name="barcode" onmouseover="this.focus();"/></td>
    </table></div></form>

    <div class="nav justify-content-end"  class="p-3 mb-2 bg-light text-dark">

    </div>
  </div>








</body>
</html>
