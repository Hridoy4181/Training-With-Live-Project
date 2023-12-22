<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 41 Tutorial -->

PHP Error Handling - 

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>

<?php

// phpinfo();

error_reporting( E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$price = 45;
if ( $price == 45 ) {

	print "The price is $price";

} else {

	print "The price is not $price";
}

?>

</section>

<?php require 'footer.php'; ?>
 