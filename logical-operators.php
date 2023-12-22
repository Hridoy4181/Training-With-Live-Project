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
<!-- Number 14 Tutorial -->
5. PHP Logical Operators - 
<br>
<br>

<?php

$a = 40;
$b = 20;

if ( $a == 40 and $b == 20 ) {
	echo 'Training with live project';

} else {

	echo 'Wrong';
}

?>




<hr>

<!-- Number 14 Tutorial -->
<!-- 6. string operators -->
<!-- Concatenation Operator ('.') -->
<?php
	$x = 'Training with';
	$y = ' live project';
	$z = $x . $y;
	echo $z;
?>
<hr>

<?php
$a = 'Hello ';
$b = $a . 'World!'; // now $b contains "Hello World!"
echo $b;

echo '<br/>';
?>

<?php

$a  = 'Hello ';
$a .= 'World!';     // now $a contains "Hello World!"
echo $a;
?>
<hr>

<!-- Concatenating Assignment Operator -->
<?php
	$x  = 'Training with';
	$y  = ' live project';
	$x .= $y;
	echo $x;
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
