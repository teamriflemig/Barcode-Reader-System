<?php

  $host="localhost";
  $user="root";
  $password="";
  $db="userlogin";

  //mysql_connect($host,$user,$password);
  //mysql_select_db($db);
  //$db = new mysqli($host,$user,$password,$db) or die("Unable to connect");
  try{
    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Successfully";

    $sql = 'SELECT * FROM validation';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $people = $stmt->fetchALL(PDO::FETCH_OBJ);

  }
  catch(PDOException $e)
  {
      $conn = null;
    echo "Connection failed:".$e->getMessage();
    exit(0);
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
    <h1> Update User & Delete</h1>
  </div>

  <?php require 'header.php'; ?>
  <div class="container">
    <div class="card mt-5">
       <div class="card-body">
         <table class="table table-bordered">
           <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Username</th>
             <th>Role</th>
             <th>Password</th>
           </tr>
           <?php foreach ($people as $person): ?>
             <tr>
               <td><?= $person->ID; ?></td>
               <td><?= $person->name; ?></td>
               <td><?= $person->username; ?></td>
               <td><?= $person->role; ?></td>
               <td class="hidetext"><?= $person->password; ?></td>
               <td>
                 <a href="edit.php?id=<?= $person->ID ?>" class="btn btn-info">Edit</a>
               <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->ID ?>" class='btn btn-danger'>Delete</a>
             </td>
           </tr>
         <?php endforeach; ?>
       </table>
     </div>
   </div>
 </div>
 <?php require 'footer.php'; ?>

</body>


</html>
