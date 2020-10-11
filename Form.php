<html>
<head>
<title>sign up form</title>

<script src="register.js"></script>
<h1>Sign Up</h1>
<body bgcolor=“38b0dff">
<body background="mainpagebg.jpg">
</head>


<p><form name="myForm" action="save_user.php" onSubmit="return validate_form(this);" method="post"  enctype="multipart/form-data">
<h3>Sign in to my website to get exciting contents and read private stories</h3>
<p>

<fieldset>
<legend><b>Personal Information </b>:</legend>
First name*:    <input type="text" name="firstname"  placeholder="Enter your First name" ><br></p>
<p>Last name*:  <input type="text" name="lastname"placeholder="Enter your Last name"></p>
<p>Username*:  <input type="text" name="myusername" placeholder="Enter your Last name" required></p>
<p>Password*:   <input type="password" name="pwd"placeholder="Enter your Password" ></p>
<p>Confirm Password*: <input type="password" name="cpwd"placeholder="Retype password"></p>
<p>Email*: <input type="text" name="email" id="email" placeholder="Enter your email" value="" ></p>
<p>Confirm Email*: <input type="text" name="confirmemail" id="confirmemail" placeholder="Enter email again" value=""></p>


phone*:    <input type="number" name="phone"  placeholder="Enter your phone" required> 

<fieldset><b>sex*</b>:<input type="radio" name="sex" value="male" >Male
<input type="radio" name="sex" value="female" required >Female </fieldset>
<br>

Your Occupation: <select name="job" required> 
 <option value="">occupation</option>
  <option value="student">Student</option>
  <option value="businessman">Businessman</option>
  <option value="Web designer">Web Designer</option>
  <option value="Teacher">Teacher</option>
  <option value="Book writer">Book witer</option>
</select> 
<br>

<br>


Your date of birth:
<input type="date" name="age" value="" required>


 <br>
<br>
Select image to upload to your profile:<input type="file" name="fileToUpload" id="fileToUpload">


<p><input type="checkbox" name="user" value="premium user" id="users">*I agree to the terms and agreements of this page
</p>
<p> Remarks: <textarea name="comments" id="remarks" placeholder="Tell us about yourself" cols="25" rows="3"></textarea>
<input type="submit" value="submit" />
<input type="reset" value="reset" </p>
<br>
<br>



#The field marked with "*" are compulsory
</fieldset>
</body>
</html>