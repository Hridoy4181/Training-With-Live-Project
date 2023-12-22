<?php require 'header.php'; 
// Cookie deleting finction
setcookie('visited', "", time() -3600);
?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 38 Tutorial -->

PHP Cookies - 

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>

<hr>

<?php
// Setting Cookies

if ( ! isset( $_COOKIE['visited'] ) ) {

setcookie( 'visited', '1', time() + 86400, '/' ) or die( 'Could not set cookie !' );

echo 'This is your first visit in this website.';

} else {
echo 'You are our old visitor.';
}
echo '<br>';
echo 'Cookies deleted.';
?>

</section>

<?php require 'footer.php'; ?>
