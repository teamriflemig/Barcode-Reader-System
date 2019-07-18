<?php

function phpAlert($msg) {
  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
  /*$host="localhost";
  $user="root";
  $password="";
  $db="userlogin";*/
  $conn = mysqli_connect('localhost','root','');
  mysqli_select_db($conn,'userlogin');
  if(isset($_POST["submit"]))
  {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $stmt = "select * from validation where name = '$username'";
    $result = mysqli_query($conn,$stmt);

    $num = mysqli_num_rows($result);
    if($num == 1){
      phpAlert(   "Username already taken!!"   );
    }else{
      $reg = "INSERT into validation(id, name, username, password, role) values ('$id', '$name', '$username', '$password', '$role')";
      mysqli_query($conn,$reg);
      phpAlert(   "Successfully Registered!!"   );


    }

  /*try{
    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";

      $stmt=$conn->prepare("INSERT INTO validation VALUES (?, ?, ?, ?, ?);");
      $stmt->execute(array($id,$name,$username,$password,$role));

      echo "alert('Success! Registered.')";

  }
  catch(PDOException $e)
  {
    echo "Error: ".$e->getMessage();
    exit(0);
  }*/

}

$conn=null;
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
      <li><a href="logout.php">Logout</a></li>
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
    <h1> Registration</h1>
  </div>



  <div class="container">
    <div class="register-box">
    <div class="row">
    <div class="col-md-6 register-center">
      <h2 style="font-size:20px"><b><font> Register Here! </font></b></h2>
        <form action="registration.php" method="post">
          <div class="form-group">
            <label><b><font> ID Staff :</font></b></label>
            <input type="text" name="id" class="form-control" placeholder="Enter your staff ID here!" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label><b><font> Full Name :</font></b></label>
            <input type="text" name="name" class="form-control" placeholder="Enter your full name here!" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label><b><font> Username :</font></b></label>
            <input type="text" name="username" class="form-control" placeholder="Enter your username here!" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label><b><font> Password :</font></b></label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password here!" required>
          </div>
          <div >
            <select class="box" name="role" required>
              <option>--Roles--</option>
              <option value="admin" name="admin"  style="font-size:15px"> Admin</option>
              <option value="staff" name="staff"  style="font-size:15px"> Staff</option>
            </select>
          </div>
          <button type="submit" name="submit" class="btns btn-primary" value="register" style="font-size:13px";> Register </button>
        </form>
      </div>






</body>


</html>
