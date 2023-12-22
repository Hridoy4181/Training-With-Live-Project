<?php
	$fonts     = 'Tahoma';
	$bgcolor   = '#FDD35B';
	$fontcolor = '#4B53BC';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Fundamentals</title>
	<style>
		body{font-family: <?php echo 'Tahoma'; ?>;}
		.phpcoding {width: 900px; margin: 0 auto; background: <?php echo '#ddd'; ?>; min-height: 400px}
		.headeroption, .footeroption {background: <?php echo $bgcolor; ?>; color: <?php echo $fontcolor; ?>; text-align: center; padding: 20px;}
		.maincontent {min-height: 400px; padding: 20px;}
		.headeroption h2, .footeroption h2 {margin: 0}
	</style>
</head>
<body>

<div class="phpcoding">
<section class="headeroption">
	<h2><?php echo 'PHP Fundamentals'; ?></h2>
</section>

<section class="maincontent">

<!-- code here -->
<!-- Number 16 Tutorial -->
PHP Conditional Statement - 
<br>
<br>

<hr>

1. if statement - 
<!-- executes some code if one condition is true -->

<?php
$x = 10;

if ( $x > '5' ) {
	echo 'Have a good day!';
}
?>
<hr>

2. if...else statement - 
<!-- executes some code if a condition is true and another code if that condition is false -->

<?php
$x = 10;

if ( $x > '15' ) {
	echo 'Have a good day!';
} else {
	echo 'Wrong!';
}
?>
<hr>


3. if...elseif...else statement - 
<!-- executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed -->

<?php
$x = 10;

if ( $x > '15' ) {
	echo 'X is greater than 15';
} elseif ( $x > '12' ) {
	echo 'X is greater than 12';
} elseif ( $x > '5' ) {
	echo 'X is greater than 5';
} else {
	echo 'Please give a value smaller than 10';
}
?>
<hr>

</section>

<section class="footeroption">
	<h2><?php echo 'Techearty'; ?></h2>
</section>
</div>
</body>
</html>

<?php echo '<br/>'; ?>
