<html>
<head>
<title>update attendance table</title>
</head>
<body>

	<?php
		
		$con=mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'ct_record');
		
		$sql="SELECT * FROM attendence";
		
		$records=mysqli_query($con,$sql);
	?>
	
	<table>
	<tr>
	<th>Roll</th>
	<th>Attendanc_Mark</th>
	</tr>
	
	<?php
	while($row=mysqli_fetch_array($records))
	{
	echo "<tr> <form action=update_process_atten.php method=post>";
	
	echo "<td> <input type=text name=ROLL value='".$row['roll']."'></td>";
	echo "<td><input type=text name=ATTEN value='".$row['attenmark']."'</td>";
	echo "<input type=hidden name=ID value='".$row['At_id']."'>";
	echo "<td><input type=submit></td>";
	echo"</form></tr>"; 	
	
	}
 	?>
	</table>

</body>
</html>