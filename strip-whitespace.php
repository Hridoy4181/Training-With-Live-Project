<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 45 Tutorial -->

Strip Whitespace (or other characters) - 

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
	// strip whitespace and the other characters
	echo trim( $txt, ' . ' );

	// for triming the space and the other characters on the left side
	// echo ltrim( $txt, ' . ' );

	// for triming the space and the other characters on the right side
	// echo rtrim( $txt, ' . ' );

}

?>

<!-- form for the user input -->

<form action="45-strip-whitespace.php" method="post">

<!-- <input type="text" name="text" value="
<?php
// global $txt;
// echo $txt;
?>
"> -->

<!-- for password in the form -->
<input type="password" name="text" value="
<?php
global $txt;
echo $txt;
?>
">
<input type="submit" value="Submit">
</form>


</section>

<?php require 'footer.php'; ?>
