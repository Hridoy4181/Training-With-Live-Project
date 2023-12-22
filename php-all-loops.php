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
<!-- Number 18 Tutorial -->
PHP While Loop - 
<br>

<?php
	echo '<br/>';

	$x = 1;
while ( $x <= 5 ) {
	echo "The number is: $x <br>";
	$x++;
}

echo '<br>';

	$x = 1;
do {
	echo "The number is: $x <br>";
	$x++;
} while ( $x <= 5 );
?>
<hr>


<!-- Number 19 Tutorial -->
PHP For Loop - 
<br>

<?php
for ( $i = 0; $i <= 10; $i++ ) {
	echo '"The number is: $i <br>"';
}
?>
<hr>

<!-- Number 20 Tutorial -->
PHP foreach Loop - 
<br>
<br>

<?php
	$colors = array( 'blue', 'green', 'red' );

foreach ( $colors as $color ) {
	echo "$color <br>";
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
