<?php 
require('db.php');

function formatCode($arr) {
  echo 'starting formatCode <br/>';
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
}

function selectAll() {
  // prepare variables  
  global $mysqli;
  if($mysqli) {
    // echo "mysqli connection ok <br/>";
  } else {
    echo "sthg wrong with mysqli connection <br/>";
  }
  
  $data = array();
  // perform request
  $stmt = $mysqli->prepare('SELECT * FROM employees'); 
  $stmt->execute(); // send to db
  $result = $stmt->get_result(); 
  // process request result 
  if($result->num_rows===0) echo ('No rows <br/>');
  // iteratively extract rows from result array object
  // [{id:1, name: "bo"...}, 
  //  {}, 
  //  {}]
  while($row = $result->fetch_assoc()) {
    // fetch assoc means get object from inside the $result array. The function remembers which one was last extracted. 
    $data[] = $row;
  }
  $stmt->close();
  return $data;
}
/* select single statement */ 

function selectSingle($id = NULL) {
  global  $mysqli; 
  $stmt = $mysqli->prepare('SELECT * FROM employees WHERE id = ?'); 
  $stmt->bind_param('i', $id); 
  $stmt->execute(); 
  $result = $stmt->get_result(); 
  if($result->num_rows === 0) echo ('No rows'); 
  $row = $result->fetch_assoc(); 
  $stmt->close(); 
  return $row; 
}

/* insert stmt */
function insert($fname=NULL, $lname=NULL, $phone=NULL) {
  global  $mysqli;
  $stmt = $mysqli->prepare('INSERT INTO employees (fName, lName, phone) VALUES (?, ?, ?)');
  $stmt->bind_param('sss', $fname, $lname, $phone);
  $stmt->execute();
  $stmt->close();
  header('Location: update.php?id='.$mysqli->insert_id); 
}

/* update stmt */
function update($fname=NULL, $lname=NULL, $phone=NULL, $id) {
  global  $mysqli;
  $stmt = $mysqli->prepare('UPDATE employees SET fName = ?, lName = ?, phone = ? WHERE id = ?');
  $stmt->bind_param('sssi', $fname, $lname, $phone, $id);
  $stmt->execute();
  if($stmt->affected_rows === 0 ) echo "No rows were updated"; 
  $stmt->close();
}

/* delete stmt */ 
function delete($id) {
  global  $mysqli;
  $stmt = $mysqli->prepare('DELETE FROM employees WHERE id = ?');
  $stmt->bind_param('i', $id);
  $stmt->execute();
  $stmt->close();
  header('Location: /crud/');
}

?> 
