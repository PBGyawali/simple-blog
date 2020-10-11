function validatefone()
{
 
   var t= document.myForm.phone.value;
   if (t.length!=10 ) 
   {
       alert("Please enter 10 digit phone ID or leave it blank");
       document.myForm.phone.focus() ;
       return false;
   }
return true;
}



function validateEmail()
{
 
   var emailID = document.myForm.email.value;
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   if (atpos < 1 || ( dotpos - atpos < 2 )) 
   {
       alert("Please enter correct email ID");
       document.myForm.email.focus() ;
       return false;
   }
return true;
}

function validate_form(thisform)
{   
	with (thisform) 
		{
		if 	(firstname.value=="")
		{       
			
			alert("First name must be filled out!");
			firstname.focus();
			return false;	
		}
		if 	(lastname.value=="")
		{       


			
			alert("Last name must be filled out!");
			lastname.focus();
			return false;	
		}
		if 	(pwd.value=="")
		{	

			
			alert("Password must be filled out!");
			pwd.focus();
			return false;	
		}
		if 	(cpwd.value=="")
		{
			
			alert("Confirm password must be filled out!");
			cpwd.focus();
			return false;	
		}


		if	( email.value == "" )
   		{

			
     			alert( "Please provide your Email!" );
     			email.focus() ;
     			return false;
   		}
		else
		{
     			// Put extra check for data format
     			var r = validateEmail();
     			if( r == false )
     			{
          		return false;
     			}
   		}

		if 	(confirmemail.value=="")
		{

			
			alert("Confirm Email must be filled out!")
			confirmemail.focus();
			return false;	
		}
				
		if 	(confirmemail.value != email.value)
		{

			
			
			alert("The two e-mails address do not match!");
			confirmemail.focus();
			return false;
		}
		if 	(pwd.value != cpwd.value)
		{
		
			
			alert('The two passwords do not match!');
			cpwd.focus();
			return false;
		}

		
		if	( phone.value == "" )
   		{                   
		
   		}
		else
		{
     			// Put extra check for data format
     			var e = validatefone();
     			if( e == false )
     			{
          		return false;
     			}
   		}	

		


		if	(user.checked)
		{
			return true
		}
		else
		{
			alert('Terms not agreed. Can not proceed....');
			return false;
		}
}
}