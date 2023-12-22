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
<!-- Number 6 tutorial -->
PHP Data Types - 

1. string 
2. integer 
3. float 
4. boolean 
5. array 
6. object 
7. null 
8. resource 

<!-- using Pre for var_dump -->
<!-- echo '<pre>';
var_dump($x);
echo '</pre>'; -->

<hr>
1. string -

<?php
	$x = 'PHP Data Types';
	echo $x;
	// var_dump($x);
?>
<hr>


<hr>
2. integer -

<?php
	$x = 5;
	echo $x;
	// var_dump($x);
?>
<hr>


<hr>
3. float -

<?php
	$x = 28.3;
	echo $x;
	// var_dump($x);
?>
<hr>


<hr>
4. boolean -

<?php
	$x = true;
	echo $x;
	// var_dump($x);
?>
<hr>


<hr>
5. array -

<?php
	$x = array( 'Hridoy', 'Rion', 'Ria' );
	echo '<pre>';
	var_dump( $x );
	echo '</pre>';
?>
<hr>


<hr>
6. object -

<?php
class Student {
	function department() {
		return 'Physics';
	}

	function details() {
		echo $this->department();
	}
}

$st = new Student();
$st->details();

?>
<hr>


<hr>
7. null -

<?php
	// $x = 'PHP is nice';
	$x = null;
	var_dump( $x );
?>
<hr>

</section>

<section class="footeroption">
	<h2><?php echo 'Techearty'; ?></h2>
</section>
</div>
</body>
</html>

<?php echo '<br/>'; ?>
