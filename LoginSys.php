<?php

  session_start();
  $conn = new mysqli("localhost","root","","userlogin");

  $msg="";

  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];

    $sql = "SELECT * from validation WHERE username=? AND password=?
    AND role=?";
    $stmt =$conn->prepare($sql);
    $stmt->bind_param("sss",$username,$password,$userType);
    $stmt->execute();
    $result= $stmt->get_result();
    $row = $result->fetch_assoc();

    session_regenerate_id();
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['name']=$row['name'];
    $_SESSION['user_type'] = $row['role'];
    session_write_close();

    if($result->num_rows==1 && $_SESSION['user_type']=="admin"){
      header("location:BarcodeHome.php");
    }
    else if($result->num_rows==1 && $_SESSION['user_type']=="staff"){
      header("location:staffsection.php");
    }
    else {
        $msg = "Username or Password is Incorrect!";
    }
  }

 ?>




<!DOCTYPE html>
<html>
<head>
          <title> Barcode System Login </title>
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet"  type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

          <!--<script>

              function func()
              {
                var type = document.getElementsById('admin');
                if(document.getElementsById("admin").checked)
                {
                    var val = document.getElementsById("admin").value;
                    if(mysql_num_rows($result)==1){
                      alert("Successfully Login");
                      window.open("http://localhost/barcode/BarcodeHome.php#");
                    }
                    else {
                      alert("Wrong Username or Password");
                      //pergi page lain
                    }
                }
                else if(document.getElementsById("staff").checked)
                {
                    var val = document.getElementsById("staff").value;
                    if(mysql_num_rows($result)==2){
                      alert("Successfully Login");
                      window.open("http://localhost/barcode/staffsection.php#");
                    }
                    else {
                      alert("Wrong Username or Password");
                    }
                }

              }
          </script>-->
</head>
<body class="bg-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 bg-light mt-5 px-0">
        <h2 class="text-center text-light bg-info p-3">Barcode System Login</h3>
          <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
            <div class="form-group">
            <input type="text" name="username" class="form-control form-control-lg" autocomplete="off" placeholder=" Enter Username" required>
          </div>
          <div class="form-group">
          <input type="password" name="password" class="form-control form-control-lg" autocomplete="off" placeholder=" Enter Password" required>
        </div>
        <div class="form-group lead">
          <label for="role"> I'm a:</label>
          <input type="radio" name="userType" value="admin" class="custom-radio" required>&nbsp;Admin |
          <input type="radio" name="userType" value="staff" class="custom-radio" required>&nbsp;Staff |
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-info btn-block">
          </div>
          <h5 class="text-danger text-center"><?= $msg; ?></h5>
          </form>
      </div>
      </div>
  </div>
</div>
<!--  <h1 style="font-size:40px" align="center"><font color="white" style="font-family:arial"> Barcode System Login </font></h1>
  <div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-center">
      <h2 style="font-size:20px"><b><font color="white"> Login </font></b></h2>
        <form method="post">
          <div class="form-group">
            <label><b><font color="white"> Username :</font></b></label>
            <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label><b><font color="white"> Password :</font></b></label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label class="radioContainer">Admin
              <input type="radio" name="role" value="admin" id="admin" required>
              <span class="circle"></span>
            </label>
          </div>
          <div class="form-group">
            <label class="radioContainer">Staff
              <input type="radio" name="role" value="staff" id="staff" required>
               <span class="circle"></span>
            </label>
          </div>
          <button type="submit" name="submit" class="btns btn-primary" style="font-size:13px" onclick="func()";> Login </button>
        </form>
      </div>-->
</body>
</html>
