<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 42 Tutorial -->

PHP Error Handling With Exception - 

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>

<?php
function numCheck( $num ) {
	if ( $num != 5 ) {
		throw new Exception( 'Number is not 5' );
	}
	return true;
}
try {
	numCheck( 3 );
	echo 'Yes, you have done.';
} catch ( Exception $e ) {
	echo 'Error: ' . $e->getMessage();
}
?>

</section>

<?php require 'footer.php'; ?>
