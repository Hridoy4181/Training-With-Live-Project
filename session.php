<?php
session_start();
require 'header.php';
?>

<section class="maincontent">


<?php

$_SESSION['user']     = 'Hridoy';
$_SESSION['password'] = '123';

echo 'Username is: ' . $_SESSION['user'] . '<br>';
// session_unset();
echo 'Password is: ' . $_SESSION['password'];
session_destroy();

?>

<?php require 'footer.php'; ?>
