<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
if(1<2) {
	echo "I love PHP";
}
elseif (1==1) {
	echo "I love PHP";
}
else {
	echo "I love PHP";
}

for($var = 0; $var <= 10; $var++) {
	echo $var;
}
$value = 10;
switch($value) {
	case 10:
	  echo 'moots';
	  break;
	case 9:
	  echo '2';
	  break;
	case 4:
	  echo '4';
	  break;
}
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>