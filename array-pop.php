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
array pop-
<?php
    // removing the last element of an array.
   $arr = array("red", "green", "blue", "black");

   // array pop removes the last element of an array. 
   array_pop($arr);

   print("<pre>");
   print_r($arr);
   print("</pre>");
?>

array push- 

<?php


// push/insert one or more elements into the end of array

$arr = array("red", "green", "blue", "black");

array_push($arr, "pink", "yellow");

print("<pre>");
print_r($arr);
print("</pre>");


// push with associative array

$arr = array("a"=>"red", "b"=>"green");

array_push($arr, "pink", "yellow");

print("<pre>");
print_r($arr);
print("</pre>");


// Calculate the product of values in an array (multiplication kre)

$arr = array(5,5,5);

echo ( array_product ($arr) );


// array slice prints the elements from the decleared index number of an array. 

$color_one = array("red", "green", "blue", "black", "pink");

$result = array_slice($color_one, 1, 3);

print("<pre>");
print_r($result);
print("</pre>");









?>
</section>

<section class="footeroption">
	<h2><?php echo 'Techearty'; ?></h2>
</section>
</div>
</body>
</html>

<?php echo '<br/>'; ?>

