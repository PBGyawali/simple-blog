<?php
mysql_connect("localhost","root","");
mysql_select_db("facebook_apps");
$var1=$_POST['firstname'];
$var2=$_POST['lastname'];
$var3=$_POST['myusername'];
$var4=$_POST['pwd'];
$var5=$_POST['email'];
$var6=$_POST['phone'];
$var7=$_POST['sex'];
$var8=$_POST['job'];
$var9=$_POST['age'];


$query="SELECT userid FROM register_detail where username='".$var3."' and password='".$var4."' ";
$result=mysql_query($query);
$num = mysql_num_rows($result);

if($num)
{
echo("sorry the username is already taken.please try another. :)");
}
else
{  
$query="insert into register_detail  values(null,'$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9');";
$result=mysql_query($query);
if($result)
{
header("location:thanks.php");
}
else{
echo("sorry there was an error registering to the server please try again");
}

}

?>