 <?php
		//connect to server
		$con=mysqli_connect('127.0.0.1','root','');
		//connect to database
		mysqli_select_db($con,'ct_record');
		//update query
		
		$sql="UPDATE ct_mark SET 
		roll='$_POST[ROLL]',
		name='$_POST[NAME]',
		ct1='$_POST[CT1]',
		ct2='$_POST[CT2]',
		ct3='$_POST[CT3]'
		assignment='$_POST[ASSIGNMENT]',
		department='$_POST[DEPARTMENT]', assignment='$_POST[ASSIGNMENT]' WHERE id=$_POST[ID] ";
		
		if(mysqli_query($con,$sql))
			header("refresh:2;url=updateCT.php");
		else
			echo "NOT UPDATE";
		$con->close();
	?>
	
<p align='center'> <strong><a href="updateCT.php">Go to back page</a></strong></p>