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

array shift-
<?php

			// shifts an element off the beginning of an array.

			$color = array(
				'a' => 'red',
				'b' => 'green',
				'c' => 'blue',
				'd' => 'black',
			);

			$result = array_shift( $color );

			print( '<pre>' );
			print_r( $color );
			print( '</pre>' );
			?>
<hr>
array_slice-

<?php
			// extract a slice of the array.

			$color = array( 'black', 'brown', 'blue', 'green', 'red', 'skyblue' );

			$result = array_slice( $color, 3 );

			print( '<pre>' );
			print_r( $result );
			print( '</pre>' );

?>
<hr>
array sum-
<br>
<br>

			<?php


			// calculate the sum of values in an array.

			$num    = array( '10', '20', '30' );
			$result = array_sum( $num );

			echo 'Total :' . $result;
			echo '<br>';

			// Associative array.

			$digit = array(
				'a' => '10',
				'b' => '20',
				'c' => '20',
				'd' => '10',
			);

			$result = array_sum( $digit );

			echo 'Summation :' . $result;

			?>
<br>
<hr>
array unique-


<?php
			// removes duplicate values from an array.

			$color = array(
				'a' => 'red',
				'b' => 'pink',
				'd' => 'blue',
				'e' => 'black',
				'f' => 'blue',
				'g' => 'red',
			);

			$result = array_unique( $color );

			print( '<pre>' );
			print_r( $result );
			print( '</pre>' );

			?>
<hr>
array unshift-


<?php
			// adds one or more elements to the beginning of an array.

			$clr = array(
				'1' => 'red',
				'2' => 'pink',
				'3' => 'blue',
			);

			print( '<pre>' );
			print_r( $clr );
			print( '</pre>' );

			array_unshift( $clr, 'black' );

			print( '<pre>' );
			print_r( $clr );
			print( '</pre>' );

			?>
<hr>
array values-

			<?php
			$color = array(
				'a' => 'red',
				'b' => 'pink',
				'd' => 'blue',
			);

			$result = array_values( $color );

			print( '<pre>' );
			print_r( $result );
			print( '</pre>' );


			?>

<hr>
array walk-
<br>

<?php

function subjects( $department, $name ) {
	echo "$name comes from $department department. <br>";
	echo '<br>';
}

			$name = array(

				'Hridoy' => 'English',
				'Ria'    => 'Accounting',
				'Rion'   => 'Physics',
				'Hares'  => 'Mathematics',
			);

			array_walk( $name, 'subjects' );

			?>
<hr>
array sorting-
<br>

			<?php
			$num = array(
				'Hridoy' => '20',
				'Ria'    => '32',
				'Rion'   => '56',
				'Hares'  => '24',
			);

			// sort associative arrays in ascending order, according to the value.
			asort( $num );

			foreach ( $num as $name => $age ) {
				echo 'Name : ' . $name . ', Age : ' . $age;
				echo '<br>';
			}


			?>
<hr>
array compact-

			<?php
				$name  = 'Hridoy';
				$dep   = 'English';
				$coder = 'PHP';


			$result = compact( 'name', 'dep', 'coder' );

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
