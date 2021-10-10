<?php 
  include('includes/functions.php');
  if(isset($_POST['btnUpdate'])) :
    update($_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['id']);
  endif;
  // returned user is a row with key value pairs 
  $user = isset($_GET['id']) ? selectSingle($_GET['id']) : false; 
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
  <h1>Update</h1>
  <?php if($user!= false) : ?>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
      <label for="fname">First Name</label>
      <input type="text" name="fname" id="fname" value="<?php echo $user['fName'] ?>">

      <label for="lname">Last Name</label>
      <input type="text" name="lname" id="lname" value="<?php echo $user['lName'] ?>">

      <label for="phone">Phone Nuber</label>
      <input type="text" name="phone" id="phone" value="<?php echo $user['phone'] ?>">
      <br/>
      <button name="btnUpdate">
        Upadte Record
      </button>
    </form>
  <?php else:   ?>
    <h1>User is not set</h1>
  <?php endif; ?>
  <?php include('themes/footer-scripts.php') ?>
</body>
</html>