<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<?php
if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  echo $username;
  $connection = mysqli_connect('localhost', 'root', '', 'moots');
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
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	<div class="container">
    <div class="col-sm-6">
      <h1 class="text-center">Create entry</h1>
      <form action="login_create.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
      </form>
    </div>
  </div>
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
