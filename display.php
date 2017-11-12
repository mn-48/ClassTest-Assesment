<!DOCTYPE html>
<html>
<head>
<style>

ul{list-style-type:none;margin-top:30px;margin-left:360px;padding:0;}
li{display:inline;}
a:link,a:visited
{width:100px;background-color:red;color:white;
	font-weight:bold;text-align:center;padding:5px;
	text-decoration:none}
	a:hover,a:active{background-color:#ff8080;}

table, th, td {
    border: 1px solid blue;
}
</style>
</head>
<body>

        <ul>
		<li> <a href="home.html">Home</a> </li>
		<li> <a href="insert_index.html">INSERT DATA</a> </li>
		<li> <a href="display.php">DISPLAY CLASSTEST RESULT</a> </li>
		<li> <a href="updateCT.php">UPDATE VALUE</a> </li>
		<li> <a href="#">ABOUT ME</a> </li></br>
		</ul>
	

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ct_record";
$tblname="ct_mark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT id, roll,name,ct1,ct2,ct3 FROM ct_mark";
/*
$sql="SELECT DISTINCT ct_mark.roll,ct_mark.name,ct_mark.ct1,ct_mark.ct2,ct_mark.ct3, 
((ct1+ct2+ct3)-LEAST(ct1,ct2,ct3)) as Both_Highest_of_Three, ct_mark.department,ct_mark.session,
attendence.attenmark , 
((attendence.attenmark)+((ct1+ct2+ct3)-(LEAST(ct1,ct2,ct3)))) as Obtain_total_0ut_of_30 
FROM ct_mark INNER JOIN attendence
WHERE ct_mark.roll=attendence.roll

ORDER BY ct_mark.roll ASC";
*/
$sql="SELECT DISTINCT ct_mark.roll,ct_mark.name,ct_mark.ct1,ct_mark.ct2,ct_mark.ct3,ct_mark.assignment,
 ((ct1+ct2+ct3)-LEAST(ct1,ct2,ct3)) as Both_Highest_of_Three, 
 greatest((ct1+ct2),(ct1+ct3),(ct1+assignment),(ct2+ct3),(ct2+assignment),(ct3+assignment)) as H_4,
 ct_mark.department,
 ct_mark.session, attendence.attenmark , 
 ((attendence.attenmark)+((ct1+ct2+ct3)-(LEAST(ct1,ct2,ct3)))) as Obtain_total_0ut_of_30, 
 (attendence.attenmark +greatest((ct1+ct2),(ct1+ct3),(ct1+assignment),(ct2+ct3),(ct2+assignment),(ct3+assignment))) as Tot
 
 FROM ct_mark 
 
 INNER JOIN attendence
 WHERE ct_mark.roll=attendence.roll
 ORDER BY ct_mark.roll ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
	
	<th>Roll</th>
	<th>Name</th>
	<th>CT1</th>
	<th>CT2</th>
	<th>CT3</th>
	<th>ASSIGNMENT</th>
	
	 <th>Both_Highest_of_Three</th>
	
	<th>ATTEN_Mark</th>
	
	<th>Obtain_total_0ut_of_30</th>
	<th> Highest 2 out of CT and ASSIGNMENT</th>
	
	
	
	<th>DEPARTMENT</th>
	<th>SESSION</th>
	<th>TOTAL</th>
	
	
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
		
		<td>" . $row["roll"]."</td>
		<td>" . $row["name"]."</td>
		<td>" . $row["ct1"]."</td>
		<td>" . $row["ct2"]."</td>
		<td>" . $row["ct3"]."</td>
		<td>" . $row["assignment"]."</td>
		
		<td>" . $row["Both_Highest_of_Three"]. "</td>
		
		<td>" . $row["attenmark"]. "</td>
		
		<td>" . $row["Obtain_total_0ut_of_30"]. "</td>
		
		<td>" . $row["H_4"]."</td>
		
		<td>" . $row["department"]."</td>
		<td>" . $row["session"]."</td>
		<td>" . $row["Tot"]."</td>
		
		</tr>";
    }
    echo "</table>";
}
 else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>