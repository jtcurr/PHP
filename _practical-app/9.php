<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 
	setcookie();
	$_COOKIE('yes', 'no', (60*60*7));
	$_SESSION['Greeting'] = 'Hello Student';

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>
$test = 10;
<a href="9.php?id=<?php $test ?>">ClickHere</a>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>