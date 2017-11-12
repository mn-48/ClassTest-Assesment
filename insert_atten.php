<?php

	$con=mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not connect to server';
	}
	
	if(!mysqli_select_db($con,'ct_record'))
	{
		echo 'Database not Selected';
	}
	
	//$ID=$_POST['id'];
	$ROLL=$_POST['roll'];
	$Mark=$_POST['mark'];
	
	$sql="INSERT INTO attendence (roll,attenmark) VALUES('$ROLL','$Mark')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted or it is alredy inserted';
	}
	
	else
	{
		echo 'Inserted';
	}
	header("refrsh:2;url=attenForm.html");
	$con->close();
	
?>

<p align='center'> <strong><a href="attenForm.html">Insert again(Not duplicateValue)...</a></strong></p>