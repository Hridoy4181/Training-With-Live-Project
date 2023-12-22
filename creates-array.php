<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 47 Tutorial -->

PHP array() Function - Create Array

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>


Indexed Array - 
<br>
<?php

$car = array( 'Volvo', 'BMW', 'Toyota' );
// To print elements of an array individually
// echo $car[0];

// To print all the array elements together with the for loop
$length = count( $car );
// echo $length;

for ( $i = 0; $i < $length; $i++ ) {
	echo $car[ $i ] . '<br>';
}

?>
<br>




Associative Array - 
<br>

<?php

$age = array(
	'Hridoy' => '35',
	'Ria'    => '37',
	'Rion'   => '43',
);

foreach ( $age as $key => $value ) {
	echo 'Name = ' . $key . ', Age = ' . $value;
	echo '<br>';
}

?>
<br>



Multidimensional Array - 
<br>

<?php

$car = array(
	array( 'Volvo', '100', '90' ),
	array( 'BMW', '40', '30' ),
	array( 'Toyota', '120', '100' ),
);

// echo $car[0][2];
// echo $car[1][2];
echo $car[2][2];

?>

</section>

<?php require 'footer.php'; ?>
