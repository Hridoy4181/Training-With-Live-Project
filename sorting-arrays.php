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
<!-- Number 23 Tutorial -->
PHP Sorting Arrays - 
<br>
<br>
Alphabetical Order - 
<br>
<br>

<?php
	$names = array( 'Rakib', 'Mamun', 'Akbor', 'Badol' );
	sort( $names );
	$length = count( $names );

for ( $i = 0; $i < $length; $i++ ) {
	echo $names[ $i ];
	echo '<br>';
}
?>

<br>

Numerical Order - 
<br>
<br>

<?php

	$names = array( 25, 5, 15, 30, 20 );
	rsort( $names );
	$length = count( $names );

for ( $i = 0; $i < $length; $i++ ) {
	echo $names[ $i ];
	echo '<br>';
}

?>
<br>

Ascending Order - 
<br>
<br>

Value wise Ascending - 
<br>
<br>

<?php
	$age = array(
		'Jamal' => '20',
		'Kamal' => '5',
		'Aslam' => '15',
	);
	asort( $age );

	foreach ( $age as $key => $value ) {
		echo 'Key = ' . $key . ' Value = ' . $value;
		echo '<br>';

	}

	?>
<br>

Key wise Ascending - 
<br>
<br>

<?php
	$age = array(
		'Jamal' => '20',
		'Kamal' => '5',
		'Aslam' => '15',
	);
	ksort( $age );

	foreach ( $age as $key => $value ) {
		echo 'Key = ' . $key . ' Value = ' . $value;
		echo '<br>';

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