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

  }
  catch(PDOException $e)
  {
      $conn = null;
    echo "Connection failed:".$e->getMessage();
    exit(0);
  }

?>
