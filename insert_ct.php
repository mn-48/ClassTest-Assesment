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
	
	
	$ROLL=$_POST['Roll'];
	$NAME=$_POST['Name'];
	$CT1=$_POST['Ct1'];
	$CT2=$_POST['Ct2'];
	$CT3=$_POST['Ct3'];
	$DP=$_POST['Dept'];
	$SESS=$_POST['Session'];
	
	
	$sql="INSERT INTO ct_mark (roll,name,ct1,ct2,ct3,department,session) VALUES('$ROLL','$NAME','$CT1','$CT2','$CT3','$DP','$SESS')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted or it is alredy inserted';
	}
	
	else
	{
		echo 'Inserted';
	}
	
	header("refrsh:2;url=ctForm.html");
	$con->close();
	
?>

<p align='center'> <strong><a href="ctForm.html">Insert again(Not duplicateValue)</a></strong></p>