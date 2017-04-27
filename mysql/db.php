<?php 
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
  if($connection) {
  	echo "connected";
  } else {
  	die("database connection failed");
  }
?>