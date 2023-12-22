<?php
	$fonts     = 'Tahoma';
	$bgcolor   = '#FDD35B';
	$fontcolor = '#4B53BC';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Fundamentals</title>
	<style>
		body{font-family: <?php echo 'Tahoma'; ?>;}
		.phpcoding {width: 900px; margin: 0 auto; background: <?php echo '#ddd'; ?>; min-height: 400px}
		.headeroption, .footeroption {background: <?php echo $bgcolor; ?>; color: <?php echo $fontcolor; ?>; text-align: center; padding: 20px;}
		.maincontent {min-height: 400px; padding: 20px;}
		.headeroption h2, .footeroption h2 {margin: 0}
	</style>
</head>
<body>

<div class="phpcoding">
<section class="headeroption">
	<h2><?php echo 'PHP Fundametals Training'; ?></h2>
</section>

<section class="maincontent">

<!-- Number 36 Tutorial -->
<hr>
PHP File Upload - 

<span style=float:right>
<?php
  date_default_timezone_set( 'Asia/Dhaka' );
	echo 'Time: ' . date( 'h:i:sa' );
?>
</span>

<hr>

<?php

if ( isset( $_FILES ['image'] ) ) {
	$filename = $_FILES ['image'] ['name'];
	$filetmp  = $_FILES ['image'] ['tmp_name'];
	move_uploaded_file( $filetmp, 'images/' . $filename );
	echo 'Image Uploded Successfully';
}

?>

<form action= '' method = 'POST' enctype = 'multipart/form-data' >
	<input type = 'file' name = 'image'>
	<input type = 'submit' value = 'Submit'>
</form>


</section>

<section class="footeroption">
	<h2><?php echo 'www.trainingwithliveproject.com'; ?></h2>
</section>
</div>
</body>
</html>

<?php echo '<br/>'; ?>
