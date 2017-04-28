<?php include 'db.php';?>
<?php

function showAllData() {
	global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('query failed');
  }

  while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

function updateData() {
  global $connection;
 if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $id = $_POST['id'];
   $query = "UPDATE users SET ";
   $query .= "username = '$username' ";
   $query .= "password = '$password' ";
   $query .= "WHERE id = $id";
   $result = mysqli_query($connection, $query);
   if(!$result) {
    die('Query f%%ailed' . mysqli_error($connection));
   } else {
    echo "<h2>Record updated</h2>";
   }

 }
}

function deleteRows() {
  global $connection;
 if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $id = $_POST['id'];
   $query = "DELETE from users ";
   $query .= "username = '$username' ";
   $query .= "password = '$password' ";
   $query .= "WHERE id = $id ";

   $result = mysqli_query($connection, $query);
   if(!$result) {
    die('Query failed' . mysqli_error($connection));
   }
 }
}

function createEntry() {
  if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $username = mysql_real_escape_string($connection, $username);
  $password = mysql_real_escape_string($connection, $password);
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
  if($connection) {
    echo "connected";
  } else {
    die("database connection failed");
  }

  $query = "INSERT INTO users(username, password) ";
  $query .= "VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);
  echo $result;

  if(!$result) {
    die('query failed');
  } else {
    echo "<h2>Record created</h2>";
  }
}
}
?>