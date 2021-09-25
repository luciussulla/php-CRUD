<?php 
  include('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Results od db queries below</h1>
  <?php 
      echo "Starting format code";
      formatCode(selectAll()); 
      formatCode(selectSingle());
      $user = selectSingle(1); 
      $greeting = "Hello ".$user['lName'].' '.$user['fName'];
      echo $greeting; 
  ?>
</body>
</html>