<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 48 Tutorial -->

PHP array() Function - array_change_key_case()

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>

<?php

// Associative array all key upper case.
$name = array(
	'Jaman' => '20',
	'Kader' => '32',
	'Mamun' => '56',
	'Akbor' => '13',
);

// without <pre> tag output will show in one line. 
print( '<pre>' );
print_r( array_change_key_case( $name, CASE_UPPER ) );
print( '</pre>' );


// Associative array all key lower case.
$name = array(
	'Jaman' => '20',
	'Kader' => '32',
	'Mamun' => '56',
	'Akbor' => '13',
);

print( '<pre>' );
print_r( array_change_key_case( $name, CASE_LOWER ) );
print( '</pre>' );




?>

</section>

<?php require 'footer.php'; ?>
