<?php 
// Always start the session at first - starting a session
session_start();
require 'header.php'; 
?>

<section class="maincontent">

<!-- code here -->
<!-- Number 37 Tutorial -->
<hr>
PHP Sessions = 

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>

<hr>

<?php
$_SESSION['user']     = ' Hridoy';
$_SESSION['password'] = ' 123';

echo 'Username is' . $_SESSION['user'] . '<br>';

// A break by session (unset)
// session_unset();
echo 'Password is' . $_SESSION['password'];

// Ending of a session 
session_destroy();
?>

</section>

<?php require 'footer.php'; ?>
