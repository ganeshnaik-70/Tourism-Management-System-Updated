<?php

$con = mysqli_connect('localhost:3307', 'root', '', 'travel');

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedbk'];

$que="INSERT INTO `feedback` (`id`,`name`,`email`,`feedbk`) VALUES (0,'$name','$email','$feedback')";

$result = mysqli_query($con, $que);

if (isset($_POST['submit'])) {
	header('location:feedback.html');
}

?>