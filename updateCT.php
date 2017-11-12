<html>
<head>
<title>update classtest mark table</title>
</head>
<body>

	<?php
		
		$con=mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'ct_record');
		
		$sql="SELECT * FROM ct_mark";
		
		$records=mysqli_query($con,$sql);
	?>
	
	<table>
	<tr>
	<th>Roll</th>
	<th>Name</th>
	<th>CT1</th>
	<th>CT2</th>
	<th>CT3</th>
	<th>ASSIGNMENT</th>
	<th>DEPARTMENT</th>
	<th>SESSION</th>
	
	</tr>
	
	<?php
	while($row=mysqli_fetch_array($records))
	{
	echo "<tr> <form action=updateCTprocess.php method=post>";
	
	echo "<td> <input type=text name=ROLL value='".$row['roll']."'></td>";
	echo "<td><input type=text name=NAME value='".$row['name']."'</td>";
	echo "<td><input type=text name=CT1 value='".$row['ct1']."'</td>";
	echo "<td><input type=text name=CT2 value='".$row['ct2']."'</td>";
	echo "<td><input type=text name=CT3 value='".$row['ct3']."'</td>";
	echo "<td><input type=text name=ASSIGNMENT value='".$row['assignment']."'</td>";
	echo "<td><input type=text name=DEPARTMENT value='".$row['department']."'</td>";
	echo "<td><input type=text name=SESSION value='".$row['session']."'</td>";
	
	
	echo "<input type=hidden name=ID value='".$row['id']."'>";
	echo "<td><input type=submit></td>";
	echo"</form></tr>"; 	
	
	}
 	?>
	</table>
