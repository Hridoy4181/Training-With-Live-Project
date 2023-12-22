<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 43 Tutorial -->

PHP Explode() & Implode() Function - 

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>

<?php

$mystr = 'We are learning PHP';
// converted in array
// explode function has 2 parameter. one is delimiter, second is source string
// want to convert it in array depending on space that's why the 1st parameter is blank
$str   = explode( ' ', $mystr );
echo $str[3];

echo '<br>';
echo '<br>';

$mystr = array( 'We', 'are', 'learning', 'PHP' );
// without comma like a string...
// echo implode( ' ', $mystr );

// with comma 
echo implode( ', ', $mystr );

?>

</section>

<?php require 'footer.php'; ?>
