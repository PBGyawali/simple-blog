<?php include("test.php"); ?>


<html>
<head><title>About us</title>

<style type="text/css">
#next{float:top;
}

#down{float:bottom;
}

body{
	color: #15E039;
}
body {
	background-color: #CD2023;
	background-image: url(black%20background.jpg);
}

a {
    float: left;
    
    text-decoration: none;
    color: white;
    padding: 0.2em 0.6em;
    border-right: 1px solid white;
}


#navbar a:hover {
    background-color: #4b545f;
}

a:hover {
    background-color: green;
}

</style>
</head>




<br>





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
<div id="down">
<u>
<br>
<h1>Welcome to my awesome blog</h1>
</u>
<u><h2>About me:</h2></u>

<p>
  <center>
    <font color=yellow size="5"><strong><em>Hi,  Thank you for visiting my blog! </a></em></strong></font>
  </center>
</p>
<p><img src="logo.jpg" alt="author" width="450" height="900" style="float:left";margin:0 5px 0 0;></p>
<p>

    <font color=yellow size="5">
    

<pre> This is me, Prakhar Gyawali, the owner of this blog and
 manager at Gyawali Bros Pvt. Ltd.     
 Current location: kathmandu.,nepal.     

 For any queries, please contact me at :<a href="mailto:prakhar2015@kcm.edu.np"> prakhar2015@kcm.edu.np</a>    </pre>

<pre> or contact me  on <font color="red" size="5"><a href="https://www.facebook.com/prkhr.pskr" target="_blank">facebook</pre></font>
	
<img src="https://www.facebook.com/images/fb_icon_325x325.png" border="0"  /></pre>





</div>

</div>
</body>
</html>