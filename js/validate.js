function validation_email(email)
{
	  var regex=/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
	mail=email.value;
	alert(mail);
	if(mail.value =='')
	{
		alert("enter Email");
		//document.getElementById('tomsg').innerHTML="<img src='images/bullet_error.png'>Please Enter  Email address";
		document.getElementById('to').focus;
		return false;

	}
	else (mail.match(regex)) 
	{
		alert("success");
		return true;
	}
	
	
}
function formValidate(mailform) 
{
	 var ename=mailform.to;
	 if(validation_email(ename))
	 {
		return true;
	}
	return false;
}



