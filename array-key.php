<?php
$fonts= "arial";

session_start();

setcookie('visited', "", time()-3600);

?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Syntax</title>
	<style>
	body{font-family:  <?php echo "$fonts";?>}
	.phpcoding{width:900px; margin: 0 auto; background: <?php echo "#ddd"?> ;}	
	
	.header h2, .footer h2{ background: #444; color: <?php echo "#fff";?>; text-align: center; padding:10px;}

	.maincontent{min-height: 400px; padding:20px;}
	input[type="text"]{width: 200px}
</style>

</head>

<body>

	<div class="phpcoding">
		<section class="header">
			<h2>PHP Fundamentals Tutorial</h2>	

		</section>

		<section class= "maincontent">
			
			<hr/> 
			PHP array() Function- array_key

			<span style='float:right'>
				<?php

				date_default_timezone_set ('Asia/Dhaka');
				echo "Time is: " .date("h:i:sa");
				?>

			</span>
			<hr/>

			<?php

//key — Fetch a key from an array
			$name = array("Hridoy", "Ria", "Biva", "Choyon");
            next($name);
			echo "The current position key is: ".key($name);
			echo "<br>";

//krsort — Sort an array by key in reverse order
			$name = array(
				"Hridoy" =>"27", 
				"Ria" =>"23", 
				"Biva" =>"32", 
				"Choyon" =>"28");
			krsort($name);

			foreach($name as $key=>$value){
				echo "Name : ".$key. ", Age :".$value;
				echo "<br>";
				echo "<br>";
			}

//ksort — Sort an array by key
			$name = array(
				"Hridoy" =>"27", 
				"Ria" =>"23", 
				"Biva" =>"32", 
				"Choyon" =>"28");
			ksort($name);

			foreach($name as $key=>$value){
				echo "Name : ".$key. ", Age :".$value;
				echo "<br>";
				echo "<br>";
			}


//shuffle — Shuffle an array (shows in the random way)

			$color = array("red", "green", "blue", "yellow");

			print("<pre>");
			print_r($color);
			print("</pre>");

			shuffle($color);

			print("<pre>");
			print_r($color);
			print("</pre>");
   ?>
</section>	

<section class="footer">

	<h2><?php echo "www.shapedplugin.com";?></h2>
</section>

</div>
</body

</html>