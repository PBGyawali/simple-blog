<?php include("test.php"); ?>

<?php include("admin authenticate.php"); ?>

<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (isset($_SESSION['status'])==false)
{
header("location:index.php");
}
?>


<?php

mysql_connect("localhost","root","");
mysql_select_db("facebook_apps");
$sql = "select * from register_detail";
$resultset = mysql_query($sql);
?>
	

<table colspan="10" cellpadding="15">
<tr>
<th>S.N.</th>
<th>First name</th>
<th>Last name</th>
<th>Username</th>
<th>Password</th>
<th align="center">Email</th>
<th>Sex</th>
<th>Occupation</th>
<th>Phone</th>
<th>date of birth</th>

</tr>

<?php
$count = 1;
while($record = mysql_fetch_array($resultset))
{
	echo "<tr>";
	echo "<td>";
	echo $count;
	echo "</td>";
	echo "<td>";
	echo $record['first name'];
	echo "</td>";
	echo "<td>";
	echo $record['last name'];
	echo "</td>";
	echo "<td>";
	echo $record['username'];
	echo "</td>";
	echo "<td>";
	echo $record['password'];
	echo "</td>";
	echo "<td>";
	echo $record['email'];
	echo "</td>";
	echo "<td>";
	echo $record['sex'];
	echo "</td>";
	echo "<td>";
	echo $record['Occupation'];
	echo "</td>";
	echo "<td>";
	echo $record['phone'];
	echo "</td>";
	echo "<td>";
	echo $record['age'];
	echo "</td>";
	echo "<td>";
	echo "
	<form action='updateform.php' method='POST'>
	<input type='hidden' name='sel_record' value='$count'>
	<input type='submit' value='edit'></form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='deleteform.php' method='POST'>
	<input type='hidden' name='sel_record' value='$count'>
	<input type='submit' value='delete'></form>";
	echo "</td>";
	echo "</tr>";
	
	
	$count++;
}
?>
</table>