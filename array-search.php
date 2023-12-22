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
	<h2><?php echo 'PHP Fundamentals'; ?></h2>
</section>

<section class="maincontent">

<!-- code here -->

			<?php
			// searches the array for a given value and returns the first corresponding key if successful.

			$arr = array(
				'a' => 'red',
				'b' => 'green',
				'c' => 'blue',
				'd' => 'black',
			);

			if ( isset( $_POST['text'] ) ) {

				global $txt;

				$txt = $_POST['text'];

				$result = array_search( $txt, $arr );

				echo "You have searched by $txt and your key is $result";

			}

			?>



<form action="array-search.php" method="POST">
<input type="text" name="text" value="<?php echo $txt; ?>"/>
<input type="submit" value="Submit"/>	
</form>

</section>

<section class="footeroption">
	<h2><?php echo 'Techearty'; ?></h2>
</section>
</div>
</body>
</html>

<?php echo '<br/>'; ?>
