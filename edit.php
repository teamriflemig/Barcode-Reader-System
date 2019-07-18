<?php

require 'db.php';

$id = (int)$_GET['id'];
$sql = 'SELECT * FROM validation where ID=:id';
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);
$person = $stmt->fetch(PDO::FETCH_OBJ);

if (isset($_POST['updateID']) && isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role']) ){


  $updateID = $_POST['updateID'];
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  $update = 'UPDATE validation SET name=:name, username=:username, password=:password, role=:role WHERE ID=:updateID';
  $stmt = $conn->prepare($update);
  $stmt->execute([':name' => $name, ':username' => $username, ':password' => $password, ':role' => $role, ':updateID' => $updateID]);

  $conn = null;
  if($stmt)
  {
    echo 'Data Updated';
    header("Location: controlaccount.php");
  }

}

 ?>
 <?php require 'header.php'; ?>
 <div class="container">
   <div class="card mt-5">
     <div class="card-header">
       <h2>Update person</h2>
     </div>
     <div class="card-body">
       <?php if(!empty($message)): ?>
         <div class="alert alert-success">
           <?= $message; ?>
         </div>
       <?php endif; ?>
       <form method="post">
         <div class="form-group">
           <label for="name">Name</label>
           <input value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
         </div>
         <div class="form-group">
           <label for="username">Username</label>
           <input type="username" value="<?= $person->username; ?>" name="username" id="username" class="form-control">
         </div>
         <div class="form-group">
           <label for="password">Password</label>
           <input type="password" value="<?= $person->password; ?>" name="password" id="password" class="form-control">
         </div>
         <div class="form-group">
           <label for="role">Role</label>
           <input type="role" value="<?= $person->role; ?>" name="role" id="role" class="form-control">
         </div>
         <div class="form-group">
           <input type="hidden" name="updateID" value="<?= $person->ID; ?>">
           <button type="submit" class="btn btn-info">Update person</button>
         </div>
       </form>
     </div>
   </div>
 </div>
 <?php require 'footer.php'; ?>
