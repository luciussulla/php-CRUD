<?php 
  include('includes/functions.php');
  if(isset($_POST['btnInsert'])) :
    insert($_POST['fname'], $_POST['lname'], $_POST['phone']);
  endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('themes/header-scripts.php') ?>
  <title>Document</title>
</head>
<body>
  <?php include('themes/header.php') ?>
  <h1><i class="fa fa-plus-circle"></i>Insert</h1>
  <div class="container-fluid">  
    <form action="" method="post">
    <div class="row">
            <div class="col-md-6">
              <label for="fname">First Name</label>
              <input class="form-control" type="text" name="fname" id="fname" value="">
            </div>
            <div class="col-md-6">
              <label for="lname">Last Name</label>
              <input class="form-control" type="text" name="lname" id="lname" value="">
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <label for="phone">Phone Nuber</label>
              <input class="form-control" type="text" name="phone" id="phone" value="">
            </div>
          </div>
      <br/>
      <button class="btn btn-primary" name="btnInsert">
        Insert Record
      </button>
    </form>
  </div>
 
  <?php include('themes/footer-scripts.php') ?>
</body>
</html>