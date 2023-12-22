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

			<?php
			// replaces elements of the first array with the second arr array.

			$clr_one = array( 'red', 'black' );
			$clr_two = array( 'green', 'blue' );

			$result = array_replace( $clr_one, $clr_two );

			print( '<pre>' );
			print_r( $result );
			print( '</pre>' );

			$clr_one   = array( 'red', 'black' );
			$clr_two   = array( 'green', 'blue' );
			$clr_three = array( 'pink', 'yellow' );


			$result = array_replace( $clr_one, $clr_two, $clr_three );

			print( '<pre>' );
			print_r( $result );
			print( '</pre>' );

			// replace with associative array.

			$arr = array(
				'a' => 'blue',
				'b' => 'black',
			);
			$clr = array(
				'' => 'red',
				'pink',
			);

			$result = array_replace( $arr, $clr );

			print( '<pre>' );
			print_r( $result );
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
