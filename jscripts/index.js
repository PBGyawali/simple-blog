function validateform(){
if(p.username.value == "")
{
	alert("Enter your username first");
	p.username.focus(); 
	return false;
}

if(p.password.value == "")
{
	alert("Enter the your Password.");
	p.password.focus();
	return false;
}
if((p.password.value).length < 0)
{
	alert("Password should be minimum 5 characters.");
	p.password.focus();
	return false;
}
else
return true;
}