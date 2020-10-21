function requiredField(field,alertmsg)
{
	with (field)
	{
		if (value==null||value=="")
		{
				alert(alertmsg);
				return false;
		}
		else
		{
			return true;
		}
	}
}

function validate_email(field,alertmsg)
{
	with (field)
	{
		
	
		atkopos=value.indexOf("@");
		
		
	
		dotkopos=value.lastIndexOf(".");
	
		
	
		if (atkopos<1||dotkopos-atkopos<2)
		{	
			alert(alertmsg);
			return false;
		}
		else
		{
			return true;
		}
	}
}

function validate_form(thisform)
{
	with (thisform) 
	{
		if (requiredField(Firstname,"First name must be filled out!") == false)
		{
			Firstname.focus();
			return false;
			
		}
		if (requiredField(Lastname,"last name must be filled out!") == false)
		{
			Lastname.focus();
			return false;
			
		}
		if (requiredField(email,"Email must be filled out!") == false)
		{
			email.focus();
			return false;
			
		}

		if (requiredField(comments,"You must write some message!") == false)
		{
			comments.focus();
			return false;
			
		}

		if (validate_email(email,"Not a valid e-mail address!") == false)
		{
			email.focus();
			email.value="";
			return false;
		}	
				
	}
}