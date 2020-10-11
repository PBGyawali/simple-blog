<?php
session_start();
if(isset($_POST['submit']))
	{
		if(isset($_POST['remember']))
		{
			$expire=time()+60*60*24*30;
			setcookie("username", $_POST['username'], $expire);
			setcookie("password", $_POST['password'], $expire);
		}
		else{
			setcookie("username", $_POST['username'], time()-3600);
			setcookie("password", $_POST['password'], time()-3600);
		}
		
$con=mysql_connect("localhost","root","");
mysql_select_db( "facebook_apps",$con);
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$query="select userid from register_detail where username='$username' and password='$password'";
$q_result=mysql_query($query,$con);
$rows=mysql_num_rows($q_result);
if($rows)
{
header("location:home.php");
$_SESSION['status']=true;
$_SESSION['login_user']=$username;
}
else
{
?>
				<script>window.location='index.php?&err=Sorry the username and password combination donot exist in the server'</script>
				
			<?php
}
}
?>