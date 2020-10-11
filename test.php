<html>
<head>
<link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
<div id="container">
  <div id="header"><img src="banner.jpg"width="100% height:60px" alt="image name" />

<div id="top_info"><font color=yellow size="3"><strong><em>
    
<?php session_start();;?>  



Hello 
<?php
$user_check=$_SESSION['login_user'];

echo $user_check;?>



<br>You viewed this page
<?php include("sessioncount.php");?>

times

</em></strong></font></div>

<div id="navbar">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="contact us.php">Contact us</a></li>
	<li><a href="Userlist.php">Userlist</a></li>
	</li> <li> <a href="#">Read stories</a> 
          <ul> 
	   <li><a href="confession.html">Secret confessions</a></li>
	   <li><a href="underconstruction.html">Real life stories</a></li>
           <li><a href="underconstruction.html">Love stories</a></li>  
           <li><a href="underconstruction.html">Ghost stories</a></li> 
	   </ul> 



        <li><a href="logout.php">Log out</a></li>
      </ul>




    </div>







    
  
<div id="visitcount"><font color=yellow size="3"><strong><em>Number of visitors to this page so far:<?php include("counter.php");?></em></strong></font></div>


</div>
</body>
</html>﻿