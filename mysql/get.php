<?php
print_r($_GET);
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<?php
$id=10;
?>
<a href="get.php?id=<?php echo $id; ?>">Click here</a>
</body>
</html>