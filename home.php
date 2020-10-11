<?php include("test.php"); ?>
<html>
<head>

<title>Home</title>

</head>

<html>
<head>

<title>Home</title>

</head>
<font color="yellow">

<div id="marque">
<marquee scrollamount= "25"  behavior=alternate onmouseover="this.stop();" onmouseout="this.start();">  <img src="smile.png"
 width="100" height="100" > <br>Thank you for visiting  </marquee>
</div>
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
<body bgcolor=“38b0dff">
<body background="black background.jpg">
<h1>Hamrokatha.com</h1>
<h2><b>Hi</b>
<?php
$user_check=$_SESSION['login_user'];

echo $user_check;?> <h2> and Welcome to our Awesome Blog</b></h2>
<hr>


<p>


 <font size="5">This is a website meant to bring interested readers and creative writers into one platform.<br>
IF you have some creative stories then dont forget to post it to us
by clicking on the contact us button.<br>To know more about us click on About us button located on the
 left side of this page.</font> 
</p>


<b>Here you can read following type of stories</b>:
<div>
<ul style="list-style-type:square">
  <li>Real life stories</li>
  <li>Love stories
  <li>Secret confessions
  <li>Ghost stories</li>
</ul>
</div>

<div>

<font size="8">Here is a demo video for you...</font>
</div>
<div class="imlk" >						
			<object type="application/x-shockwave-flash" width="600" height="400" data="http://www.youtube.com/v/YRgSvRp676I">
							<param name="demo" value="kill me" />
							<param name="wmode" value="transparent" /><param name="quality" value="high" /></object> </div>
<br>


<b>Following are the top stories of the week</b>:<ol type="1">
  <li>The killer nurse  </li>
  <li>The real story behind Napolean's death
  <li>The romantic couple</li>
</ol>

<b>Following are details of some of the famous stories</b>:
<dl>
  <dt>The romantic life and nina</dt>
  <dd>-Author-Nimesh Shrestha</dd>
      <dd>-Age-37</dd>
  <dt> The virgin suicide</dt>
  <dd>- Author-Debory James</dd>
<dd>-Age-43</dd>
</dl>
</body>
</html>