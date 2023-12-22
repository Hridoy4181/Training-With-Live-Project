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
			PHP array_combine & array_count_values

			<span style='float:right'>
				<?php

				date_default_timezone_set ('Asia/Dhaka');
				echo "Time is: " .date("h:i:sa");
				?>

			</span>
			<hr/>

     <?php

//array_combine
     $name= array("Hridoy", "Ria", "Rion");
     $subject= array("English", "Accounting", "Not yet");

     $combine= array_combine($name, $subject);

     print("<pre>");

     print_r($combine);
     print("</pre>");


//array_count_values

     $name= array("Hridoy", "Ria", "Rion" , "Ria" ,"Hridoy", "Hridoy", "Ria" , "Ria", "Rion");

    $age= array("20", "50", "13", "20", "20", "13" , "13" , "50" , "50");


    print("<pre>");
    print_r(array_count_values($name));
    print("</pre>");

     ?>

   </section>	

   <section class="footer">

     <h2><?php echo "www.shapedplugin.com";?></h2>
   </section>

 </div>
 </body

 </html>