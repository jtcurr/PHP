<?php
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
  if($connection) {
  	echo "connected";
  } else {
  	die("database connection failed");
  }

  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('query failed');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
      <?php
      while($row = mysqli_fetch_row($result)){
        ?>
        <pre>
        <?php
        print_r($row);
        ?>
        </pre>
        <?php
      }
      ?>
    </div>
  </div>
</body>
</html>