<?php require 'header.php'; ?>

<section class="maincontent">
<!-- Number 30 Tutorial -->
<hr>
PHP Date and Time - 
<hr>

<span style=float:right>
<?php
  date_default_timezone_set( 'Asia/Dhaka' );
	echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>

<?php
	echo 'Today is ' . date( 'd-m-Y' ) . '<br>';
	echo 'Today is ' . date( 'l' ) . '<br>';
	echo 'Default Time is ' . date( 'h:i:sa' ) . '<br>';

	// date_default_timezone_set( 'Asia/Dhaka' );
	// echo 'Bangladesh Time is ' . date( 'h:i:sa' ) . '<br>';
	// echo date_default_timezone_get();
?>

</section>

<?php require 'footer.php'; ?>
