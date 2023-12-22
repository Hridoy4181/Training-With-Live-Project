<?php
$fonts = 'Tahoma';

$name    = $email = $website = $comment = $gender = '';
$errname = $erremail = $errwebsite = $errgender = '';


if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	if ( empty( $_POST['name'] ) ) {
		$errname = "<span style='color:red'>Name is required.</span>";
	} else {
		$name = validate( $_POST['name'] );
	}


	if ( empty( $_POST['email'] ) ) {
		$erremail = "<span style='color:red'E-mail is required.</span>";
	} elseif ( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {

		$erremail = "<span style='color:red'Invalid e-mail format.</span>";
	} else {
		$email = validate( $_POST['email'] );
	}


	if ( empty( $_POST['website'] ) ) {
		$errwebsite = "<span style='color:red'>Website is required.</span>";
	} else {
		$website = validate( $_POST['website'] );
	}

	if ( empty( $_POST['gender'] ) ) {
		$errgender = "<span style= 'color:red'>Gender is required.</span>";
	} else {
		$gender = validate( $_POST['gender'] );
	}


	/*
	$name  = validate($_POST["name"]);
	$email   = validate($_POST["email"]);
	$website = validate($_POST["website"]);
	$gender  = validate(@$_POST["gender"]);*/
	$comment = validate( $_POST['comment'] );

	/*
	echo "Name:". $name ."</br>";
	echo "E-mail:". $email ."</br>";
	echo "Website:". $website ."</br>";
	echo "Comment:". $comment ."</br>";
	echo "Gender:". $gender;*/
}

function validate( $data ) {
	$data = trim( $data );
	$data = stripcslashes( $data );
	$data = htmlspecialchars( $data );
	return $data;

}


?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Syntax</title>
	<style>
	body{font-family:  <?php echo "$fonts"; ?>}
	.phpcoding{width:900px; margin: 0 auto; background: <?php echo '#ddd'; ?> ;}	
	
	.header h2, .footer h2{ background: #444; color: <?php echo '#fff'; ?>; text-align: center; padding:10px;}

	.maincontent{min-height: 400px; padding:20px;}
</style>

</head>

<body>

	<div class="phpcoding">
		<section class="header">
			<h2>PHP Fundamentals Tutorial</h2>	

		</section>	
		
		<section class= "maincontent">
			
			<hr/> 
		  PHP E-mail validation
			<hr/>

		   <form method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>">
			<table>
				<p style="color:red">*Required fields:</p>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="name"./>*<?php echo $errname; ?></td>
				</tr>

				<tr>
					<td>E-mail :</td>
					<td><input type="text" name="email"/>*<?php echo $erremail; ?></td>
				</tr>

				<tr>
					<td>Website :</td>
					<td><input type="text" name="website"/>*<?php echo $errwebsite; ?></td>
				</tr>

				<tr>
					<td>Comment :</td>
					<td><textarea name="comment" rows="5" cols="40"></textarea></td>
				</tr>

					<td>Gender :</td>
					<td>
						<input type="radio" name="gender" value="female"/>Female
						<input type="radio" name="gender" value="male"/>Male*<?php echo $errgender; ?>
					</td>
				</tr>

					<td></td>
					<td><input type="submit" value="submit"/></td>
				</tr>
			</table>

			</form>


		</section>	


		<section class="footer">
			<h2><?php echo 'www.shapedplugin.com'; ?></h2>
		</section>

	</div>
</body

</html>
