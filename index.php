<?php require 'header.php'; ?>

<section class="maincontent">


<!-- Number 24 Tutorial -->
Variable Scope-
<?php

$x = 15;

function test1() {
	global $x;
	$a = 5;
	echo $a;
	echo '<br>';
	echo 'Access from function test1 ' . $x;
	echo '<br>';

}
function test2() {
	global $x;
	$b = 10;
	echo $b;
	echo '<br>';
	echo 'Access from function test1 ' . $x;
	echo '<br>';

}

test1();
test2();

?>
<hr>



<!-- Number 25 Tutorial -->
PHP Superglobals [$GLOBALS & $_SERVER] - 
<br>
<?php

$x = 5;
$y = 10;

function sum() {
	$GLOBALS ['z'] = $GLOBALS ['x'] + $GLOBALS ['y'];
}

sum();
echo $z;

?>

<hr>
server-
<br>

<?php

// shows the folder name/location.
echo $_SERVER['PHP_SELF'];
echo '<br>';
echo '<br>';

// shows the server name.
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo '<br>';

// shows the full path with name.
echo $_SERVER['SCRIPT_NAME'];
echo '<br>';
echo '<br>';

// shows the browser name.
echo $_SERVER['HTTP_USER_AGENT'];
echo '<br>';
echo '<br>';

// shows the IP address of the server.
echo $_SERVER['SERVER_ADDR'];

?>

<hr>
<!-- Number 26 Tutorial -->
PHP Superglobals [$_REQUEST & $POST] - 
<br>
<br>
<!-- get is not secured -->
<!-- post is secured -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	Username: <input type="text" name="username">
	<input type="submit" value="Submit">
</form>

<?php
// get and post are request method.

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	$name = $_REQUEST['username'];
	// empty is a php built in func.
	if ( empty( $name ) ) {
		echo '<span style="color:red"> Username field must not be empty !!</span>';
	} else {
		echo '<span style="color:green"> You have submitted: ' . $name . '</span>';
	}
}
?>
<hr>
<br>

PHP Superglobals [$_POST] - 
<br>
<br>
<?php

// here will be the html form.
// get and post are request method.
// POST is same as REQUEST.

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	$name = $_POST['username'];
	// empty is a php built in func.
	if ( empty( $name ) ) {
		echo '<span style="color:red"> Username field must not be empty !!</span>';
	} else {
		echo '<span style="color:green"> You have submitted: ' . $name . '</span>';
	}
}

?>
<br>
<br>
<hr>


<!-- Number 27 Tutorial -->
PHP Superglobals [$_GET] - 
<br>
<br>

<a href="text.php?msg=Good&txt=Bye">Sent Data</a>

<br>
<br>
<hr>

<!-- Number 28 Tutorial -->
PHP Form Validation - 
<br>
<br>

<script></script>

<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" >

<table>

	<tr>
	<td> Name </td>
	<td> <input type="text" name="name" required > </td>
	</tr>

	<tr>
	<td> E-mail </td>
	<td> <input type="text" name="email"> </td>
	</tr>

	<tr>
	<td> Website </td>
	<td> <input type="text" name="website"> </td>
	</tr>

	<tr>
	<td> Comment </td>
	<td> <textarea name="comment" id="" cols="40" rows="5"></textarea> </td>
	</tr>

	<tr>
	<td> Gender </td>
	<td> <input type="radio"name="gender" value="male"> Male 
	<td> <input type="radio"name="gender" value="Female"> Female 
	</td>
	</tr>

	<tr>
	<td>  </td>
	<td> <input type="submit" name="submit" value-"Submit"> </td>
	</tr>

</table>

</form>

<?php

$name = $email = $website = $comment = $gender = '';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	$name    = validate( $_POST['name'] );
	$email   = validate( $_POST['email'] );
	$website = validate( $_POST['website'] );
	$comment = validate( $_POST['comment'] );
	$gender  = validate( $_POST['gender'] );

	echo 'Name: ' . $name . '<br>';
	echo 'E-mail: ' . $email . '<br>';
	echo 'Website: ' . $website . '<br>';
	echo 'Comment: ' . $comment . '<br>';
	echo 'Gender: ' . $gender;
}

function validate( $data ) {

	$data = trim( $data );
	$data = stripcslashes( $data );
	$data = htmlspecialchars( $data );

	return $data;
}

?>
<hr>

<!-- Number 29 Tutorial -->
PHP Form Required - 


<hr>

<!-- Number 31 Tutorial -->
PHP Date and Time - 
<br>
<br>

<?php

date_default_timezone_set( 'Asia/Dhaka' );
echo 'Bangladesh Time is: ' . date( 'h:i:sa' ) . '</br>';
echo date_default_timezone_get() . '</br>';
?>
<br>
<?php


	echo 'Today is ' . date( 'd.m.Y' ) . '</br>' . '</br>';

	echo 'Today is ' . date( 'l' ) . '</br>' . '</br>';

	echo 'The current time is ' . date( 'h:i:sa' ) . '</br>' . '</br>';


?>
<hr>

<!-- Number 32 Tutorial -->
PHP Include & Required - 
<br>
<br>

<hr>

<!-- Number 33 Tutorial -->
PHP File Handling - 
<br>
<br>

<?php

echo readfile( 'text-1.txt' );

?>
<hr>

<!-- Number 34 Tutorial -->
PHP File Open/Read/Close - 
<br>
<br>

<?php

$ourfile = fopen( 'text-1.txt', 'r' ) or die( 'File not found !!' );

// echo fread( $ourfile, filesize( 'text-1.txt' ) );
// fclose( $ourfile );

// echo fgets( $ourfile, filesize( 'text-1.txt' ) );
// fclose( $ourfile );

// echo fgetc( $ourfile );
// fclose( $ourfile );

while ( ! feof( $ourfile ) ) {
	echo fgets( $ourfile ) . '<br>';
};
fclose( $ourfile );

// while ( ! feof( $ourfile ) ) {
// echo fgetc( $ourfile ) . '<br>';
// };
// fclose( $ourfile );
?>
<hr>

<!-- Number 35 Tutorial -->
PHP File Create/Write - 
<br>
<br>

<?php

$createfile = fopen( 'new.txt', 'w' )
or die( 'File not found !!' );
$one        = "Hridoy Rahman\n";
fwrite( $createfile, $one );

// $two = "Abdur Rahman\n";
// fwrite( $createfile, $two );
fclose( $createfile );

?>

<hr>

<!-- Number 37 Tutorial -->
Sessions-
<br>
<br>
<?php

$_SESSION['user']     = 'Hridoy';
$_SESSION['password'] = '123';

echo 'Username is: ' . $_SESSION['user'] . '<br>';
echo 'Password is: ' . $_SESSION['password'];

?>

<hr>


<!-- Character Split and Merge PHP -->
<?php
/*
$string = 'I am a student';
echo $string;
echo '<pre>';

$stu = str_split( $string );
print_r( $stu );

?>

<br>
<br>

<?php
	$letters1 = [ 'A', 'B', 'C', ];
	$letters2 = [ 'D', 'E', 'F' ];
	echo '<pre>';
	print_r( $letters1 );
	print_r( $letters2 );

	$letter = array_merge( $letters1, $letters2 );
	print_r( $letter );
*/
?>

<br>
<br>

<?php
// $array = array( 'blue', 'red', 'green', 'blue', 'blue' );
// print_r( array_keys( $array ) );
?>

<?php require 'footer.php'; ?>
