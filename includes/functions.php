<?php 
require('db.php');

function formatCode($arr) {
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
}

function selectAll() {
  // prepare variables 
  global $mysqli;
  $data = array();
  // perform request
  $stmt = $mysqli->prepare('SELECT * FROM employees'); 
  $stmt->execute(); // send to db
  $result = $stmt->get_result(); 
  // process request result 
  if($result->num_rows===0) echo ('No rows');
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
  $stmt->close();
}


?>
