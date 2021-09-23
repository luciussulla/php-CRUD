<?php

$msqli = new msqli("localhost", "root", "", "devdrawer")
if($msqli->connect_error) {

  exit("Error")
  
} else {
  echo "Okkk"
}

?>