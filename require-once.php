<?php require 'header.php'; ?>

<section class="maincontent">
<hr>
<!-- code here -->
<!-- Number 46 Tutorial -->

PHP require or require_once - 

<span style=float:right>
<?php
date_default_timezone_set( 'Asia/Dhaka' );
   echo 'Time: ' . date( 'h:i:sa' );
?>
</span>
<hr>


<?php

// will run every time it is called
require 'new.php';
// require 'new.php';

// will not run if it is called once
require_once 'new.php';

?>


</section>

<?php require 'footer.php'; ?>
