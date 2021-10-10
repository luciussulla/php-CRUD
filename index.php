<?php 
  include('includes/functions.php');
  $allEmployees = selectAll(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include('themes/header-scripts.php') ?>
</head>
<body>
  <?php include('themes/header.php') ?>
  <div class="container-fluid">
    <h1>Results of db queries below</h1>
    <table class="table datatable">
      <thead>
        <tr>
          <th>Id</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach($allEmployees as $employee): 
            echo '
              <tr>
                <td>'.$employee['id'].   '</td>
                <td>'.$employee['lName'].'</td>
                <td>'.$employee['fName'].'</td>
                <td>'.$employee['phone'].'</td>
                <td class="text-right">
                  <a  href="update.php?id='.$employee['id'].'">Update</a>
                  <a class="text-danger" href="delete.php?id='.$employee['id'].'" onClick="return confirm(\'are you sure?\')">Delete</a>
                </td>
              </tr>  
            ';
          endforeach; 
        ?>
      </tbody>
    </table>
  </div>
  <?php include('themes/footer-scripts.php') ?>
</body>
</html>

