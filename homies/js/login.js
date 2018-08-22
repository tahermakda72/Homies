
function validateemail()
{
	var rex=/^[0-9a-zA-Z\-_\.]+@[0-9a-zA-Z]+\.[0-9a-zA-Z\.]+$/;
	var email=document.fv.username;
	var count=0;
	if(email.value=="")
	{
		document.getElementById("email1").style.display="block";
		count=1;
	}
	else if(!rex.test(email.value))
	{
		if(count==0)
		{
				document.getElementById("email1").style.display="";
		}
		document.getElementById("email2").style.display="block";
	}
	else
	{
		document.getElementById("email1").style.display="none";
		document.getElementById("email2").style.display="none";
	}
}

function validatepass()
{
	var rex=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/;
	var pass=document.fv.password;

	if(pass.value=="")
	{
		document.getElementById("pass1").style.display="block";
	}
	else
	{
		document.getElementById("pass1").style.display="none";
		
	}
}

