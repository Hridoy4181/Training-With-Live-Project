<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 40 Tutorial -->

PHP Advanced Filters - 

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>



<?php

	$intnum = 300;
	$min    = 1;
	$max    = 200;
if ( filter_var(
	$intnum,
	FILTER_VALIDATE_INT,
	array(
		'options' => array(
			'min_range' => $min,
			'max_range' => $max,
		),
	)
) ) {

	echo 'It is valid range.';
} else {

	echo 'It is not valid range.';
}
?>
<br>
<br>



<?php

$url = 'http://www.trainingwithliveproject.com/index.html?q=key';

if ( filter_var(
	$url,
	FILTER_VALIDATE_URL,
	FILTER_FLAG_QUERY_REQUIRED
) ){

	echo 'This URL is valid.';
} else {

	echo 'It has no query string.';

}

?>

</section>

<?php require 'footer.php'; ?>
