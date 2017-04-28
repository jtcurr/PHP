<?php include 'functions.php';?>
<?php include 'db.php';?>
<?php include 'incldues/header.php';?>
<?php
 if(isset($_POST['submit'])){
   createEntry();
 }
?>
<body>
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
</body>
</html>