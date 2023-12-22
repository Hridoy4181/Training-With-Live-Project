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
<!-- Number 21 Tutorial -->
PHP Functions - 
<br>
<br>

<?php
	/*
	function School($name, $year) {
		echo "$name is started in $year <br>";
	}

	School("Shahbazpur M.L. High School", "1975");
	School("Deora M.L. High School", "1970");
	School("Dhitpur M.L. High School", "1960");
	*/
?>

<?php

function School( $name = 'My school' ) {
	echo "$name is a good school <br>";
}

	School( 'Shahbazpur M.L. High School' );
	school();
	School( 'Deora M.L. High School' );
	School( 'Dhitpur M.L. High School' );

?>
<br>

<?php
function sum( $x, $y ) {
	$z = $x + $y;
	return $z;
}
	echo '5+10 = ' . sum( 5, 10 );


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
