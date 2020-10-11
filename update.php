<?php

mysql_connect("localhost","root","");
mysql_select_db("facebook_apps");
$email=$_POST['email'];
$phone=$_POST['phone'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$myusername=$_POST['myusername'];
$password=$_POST['pwd'];

$id=$_POST['sel_record'];


$sql="UPDATE register_detail SET 

email='$email'



where userid='$id' ";

$result=mysql_query($sql);

if($result){
echo"update successfull";
}

else{
echo
"sorry no update";
}

?>