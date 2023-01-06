<?php

$con=mysqli_connect('localhost:3307','root','','travel');



if(isset($_POST['de-submit-c']))
{
	$id=$_POST['id'];
	$firstname=$_POST['fname'];

	$sql="DELETE FROM `customer` WHERE id=$id and fname='$firstname'";
	$result = mysqli_query($con,$sql);
	header('location:admin.php');
}

if(isset($_POST['in-submit-a']))
{
	$aid=$_POST['aid'];
	$afname=$_POST['afname'];
	$aemail=$_POST['aemail'];
	$aphone=$_POST['aphone'];
	$acity=$_POST['acity'];

	$sql1="INSERT INTO `travel_agent`(`aid`,`afname`,`aemail`,`aphone`,`acity`) VALUES ($aid,'$afname','$aemail','$aphone','$acity')";
	$result = mysqli_query($con,$sql1);
	header('location:admin.php');
}

if(isset($_POST['de-submit-a']))
{
	$aid=$_POST['aid'];
	$afname=$_POST['afname'];

	$sql2="DELETE FROM `travel_agent` WHERE aid=$aid and afname='$afname'";
	$result = mysqli_query($con,$sql2);
	header('location:admin.php');
}

if(isset($_POST['ins-submit-p']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pcity=$_POST['pcity'];

	$sql3="INSERT INTO `places`(`pid`,`pname`,`pcity`) VALUES ($pid,'$pname','$pcity')";
	$result = mysqli_query($con,$sql3);
	header('location:admin.php');
}

if(isset($_POST['de-submit-p']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];

	$sql4="DELETE FROM `places` WHERE pid=$pid and pname='$pname'";
	$result = mysqli_query($con,$sql4);
	header('location:admin.php');
}

if(isset($_POST['ins-submit-h']))
{
	$hid=$_POST['hid'];
	$hname=$_POST['hname'];
	$hphone=$_POST['hphone'];
	$hcity=$_POST['hcity'];

	$sql5="INSERT INTO `hotels`(`hid`,`hname`,`hphone`,`hcity`) VALUES ($hid,'$hname','$hphone','$hcity')";
	$result = mysqli_query($con,$sql5);
	header('location:admin.php');
}

if(isset($_POST['de-submit-h']))
{
	$hid=$_POST['hid'];
	$hname=$_POST['hname'];

	$sql6="DELETE FROM `hotels` WHERE hid=$hid and hname='$hname'";
	$result = mysqli_query($con,$sql6);
	header('location:admin.php');
}
if(isset($_POST['add_pd']))
{
	$pname=$_POST['pname'];
	$pdescription=$_POST['pdescription'];
	$pi_main=$_POST['pi_main'];
	$pi1=$_POST['pi1'];
	$pi2=$_POST['pi2'];
	$pi3=$_POST['pi3'];

	$sql6="INSERT INTO `information`(`pname`,`pdescription`,`pi_main`,`pi1`,`pi2`,`pi3`) VALUES ('$pname','$pdescription','$pi_main','$pi1','$pi2','$pi3')";
	$result = mysqli_query($con,$sql6);
	if ($result) {
		header('location:admin.php');
	}
}
?>