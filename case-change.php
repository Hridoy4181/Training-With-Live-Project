<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 44 Tutorial -->

PHP Case Change - 

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>

<?php

if ( isset( $_POST['text'] ) ) {
	global $txt;
	$txt = $_POST['text'];
	// all input in uppercase output
	echo strtoupper( $txt );

	// all input in lower case output
	// echo strtolower( $txt );

	// first letter in capital output
	// echo ucfirst( $txt );

	// all input words first letter in capital output
	// echo ucwords( $txt );
}

?>

<!-- form for the user input -->

<form action="44-case-change.php" method="post">

<input type="text" name="text" value="
<?php
global $txt;
echo $txt;
?>
">
<input type="submit" value="Submit">
</form>

</section>

<?php require 'footer.php'; ?>
