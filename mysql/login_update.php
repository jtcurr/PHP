<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>
<?php
 if(isset($_POST['submit'])){
   updateData();
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
    <h1 class="center-text">Update data</h1>
      <form action="login_create.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
          <select name="id" id="">
            <?php
              showAllData();
            ?>
          </select>
        </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Update">
      </form>
    </div>
  </div>
</body>
</html>