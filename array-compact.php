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
			PHP array() Function- array_shift

			<span style='float:right'>
				<?php

				date_default_timezone_set ('Asia/Dhaka');
				echo "Time is: " .date("h:i:sa");
				?>

			</span>
			<hr/>

     <?php

//compact — Create array containing variables and their values
     $name = "Ria";
     $department= "Accounting";
     $learning= "PHP";

     $result = compact("name", "department", "learning");


   print("<pre>");
   print_r($result);
   print("</pre>");


//current — Return the current element in an array

   $name = array("Hridoy", "Ria", "Rion", "Shanta");


   print("<pre>");
   print_r($name);
   print("</pre>");

   echo"Current value :" .current($name) ."<br>";
   echo"Next value :" .next($name) ."<br>";

   echo"Current value :" .current($name) ."<br>";
   echo"Previous value :" .prev($name) ."<br>";

   echo"Last value :" .end($name) ."<br>";
   ?>

 </section>	

 <section class="footer">

   <h2><?php echo "www.shapedplugin.com";?></h2>
 </section>

</div>
</body

</html>