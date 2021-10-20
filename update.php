<?php 
  include('includes/functions.php');
  if(isset($_POST['btnUpdate'])) :
    update($_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['id']); // like rails update action 
  endif;
  // returned user is a row with key value pairs 
  $user = isset($_GET['id']) ? selectSingle($_GET['id']) : false;  // like rails edit action
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

    <div class="container-fluid">
      <?php if($user!= false) : ?>
        <h1><i class="fas fa-pen"></i>Update</h1>
        <form action="" method="post">
          <input type="hidden" name="id" value="<?php echo $user['id'] ?>">

          <div class="row">
            <div class="col-md-6">
              <label for="fname">First Name</label>
              <input class="form-control" type="text" name="fname" id="fname" value="<?php echo $user['fName'] ?>">
            </div>
            <div class="col-md-6">
              <label for="lname">Last Name</label>
              <input class="form-control" type="text" name="lname" id="lname" value="<?php echo $user['lName'] ?>">
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <label for="phone">Phone Nuber</label>
              <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $user['phone'] ?>">
            </div>
          </div>
            
          <br/>
          <button name="btnUpdate" class="btn btn-primary">
            Upadte Record
          </button>
          
        </form>
      <?php else:   ?>
        <h1>User is not set</h1>
      <?php endif; ?>
    </div>  

  <?php include('themes/footer-scripts.php') ?>
</body>
</html>