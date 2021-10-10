<?php

$mysqli = new mysqli("localhost", "root", "", "devdrawer");
if($mysqli->connect_error) {
  exit("Error");
} else {
  // echo "Db connection successful".'<br/>';
}

?>