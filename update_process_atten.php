<!DOCTYPE html>
<html>
<head><title> process</title></head>
<body>
 <?php
		//connect to server
		$con=mysqli_connect('127.0.0.1','root','');
		//connect to database
		mysqli_select_db($con,'ct_record');
		//update query
		
		$sql="UPDATE attendence SET roll='$_POST[ROLL]',attenmark='$_POST[ATTEN]' WHERE At_id=$_POST[ID] ";
		
		if(mysqli_query($con,$sql))
			header("refresh:1;url=update_index_atten.php");
		else
			echo "NOT UPDATE";
		$con->close();
	?>
	
<p align='center'> <strong><a href="update_index_atten.php">Go to back page</a></strong></p>
</body>
</html>