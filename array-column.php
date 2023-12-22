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
<!-- Number 50 tutorial -->
<?php

// Array column showing the first name.
$name = array(
	array(
		'id'         => '100',
		'first_name' => 'Arif',
		'last_name'  => 'Jaman',
	),


	array(
		'id'         => '101',
		'first_name' => 'Hridoy',
		'last_name'  => 'Rahman',
	),

	array(
		'id'         => '102',
		'first_name' => 'Zarif',
		'last_name'  => 'Jaman',
	),
);

$firstname = array_column( $name, 'first_name', 'id' );

print( '<pre>' );
print_r( $firstname );
print( '</pre>' );


// Array column showing the last name.
$name = array(
	array(
		'id'         => '100',
		'first_name' => 'Arif',
		'last_name'  => 'Jaman',
	),


	array(
		'id'         => '101',
		'first_name' => 'Hridoy',
		'last_name'  => 'Rahman',
	),

	array(
		'id'         => '102',
		'first_name' => 'Zarif',
		'last_name'  => 'Jaman',
	),
);

$lastname = array_column( $name, 'last_name', 'id' );

print( '<pre>' );
print_r( $lastname );
print( '</pre>' );

?>

</section>

<section class="footeroption">
	<h2><?php echo 'Techearty'; ?></h2>
</section>
</div>
</body>
</html>

<?php echo '<br/>'; ?>
