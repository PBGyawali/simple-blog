<body background="mainpagebg.jpg">

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
$con=mysql_connect("localhost","root","");
mysql_select_db( "facebook_apps",$con);



$sel_record=$_POST['sel_record'];

$sql="SELECT * FROM register_detail WHERE userid='$sel_record'";

$result=mysql_query($sql);
if(!$result){

echo"sorry but something went wrong";
}
else{

while($record=mysql_fetch_array($result)){
$id=$record['userid'];
$email=$record['email'];
$firstname=$record['first name'];
$lastname=$record['last name'];
$myusername=$record['username'];
$password=$record['password'];
$phone=$record['phone'];
$sex=$record['sex'];
$occupation=$record['Occupation'];
$age=$record['age'];

}
}
echo"<form action='update.php' method='POST'>

<fieldset>
<legend><b>Personal Information </b>:</legend>
	<input type='hidden' name='sel_record' value='$id'>
	
First name:    <input type='text' name='firstname' value='$firstname'  ><br></p>
<p>Last name:  <input type='text' name='lastname' value='$lastname'></p>
<p>Username:  <input type='text' name='myusername' value='$myusername' required></p>
<p>Password:   <input type='password' name='pwd' value='$password'></p>

Email:<input type='email' name='email' value='$email'><br><br>
phone*:    <input type='number' name='phone' value='$phone'required> <br><br>

<br>
<input type='submit' name='update' value='update'>
</fieldset>
</form>"
?>


