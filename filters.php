<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 39 Tutorial -->

PHP Filters - 

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>

<?php

$str    = '<h2>I am learning PHP.</h2>';
$newstr = filter_var( $str, FILTER_SANITIZE_STRING );

echo $newstr;
?>
<br>
<br>


<?php
$int = 50;
if ( filter_var( $int, FILTER_VALIDATE_INT ) ) {
	echo 'It is an integer value.';

} else {
	echo 'It is not an integer value.';
}
?>
<br>
<br>


<?php
$ip = '127.0.0.100000000';
if ( filter_var( $int, FILTER_VALIDATE_IP ) ) {
	echo "$ip is a valid IP Address.";

} else {
	echo "$ip is not a valid IP Address.";
}
?>
<br>
<br>


<?php
$mail = 'hridoy@gmail.com';
if ( filter_var( $mail, FILTER_VALIDATE_EMAIL ) ) {
	echo "$mail is a valid email Address.";

} else {
	echo "$mail is not a valid email Address.";
}
?>
<br>
<br>


<?php
$url = 'http://www.trainingwithliveproject.com';
if ( filter_var( $mail, FILTER_VALIDATE_URL ) ) {
	echo "$url is a valid Website Address.";

} else {
	echo "$url is not a valid Website Address.";
}
?>
<br>
<br>

</section>

<?php require 'footer.php'; ?>
