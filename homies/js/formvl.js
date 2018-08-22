function validatefname()
{
	var fname=document.fv.unm;
	if(fname.value=="")
	{
		document.getElementById("fname").style.display="block";
	}
	else
	{
		document.getElementById("fname").style.display="none";
	}
}

function validatelname()
{
	var lname=document.fv.lname;
	if(lname.value=="")
	{
		document.getElementById("lname").style.display="block";
	}
	else
	{
		document.getElementById("lname").style.display="none";
	}
}

function validateemail()
{
	var rex=/^[0-9a-zA-Z\-_\.]+@[0-9a-zA-Z]+\.[0-9a-zA-Z\.]+$/;
	var email=document.fv.email;
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
	var pass=document.fv.pass;

	if(pass.value=="")
	{
		document.getElementById("pass1").style.display="block";
	}
	else
	{
		document.getElementById("pass1").style.display="none";
		
	}
}

function validaterepass()
{
	var pass=document.fv.pass;
	var repass=document.fv.repass;

	if(pass.value!=repass.value)
	{
		document.getElementById("repass1").style.display="block";
	
	}
	if(repass.value=="")
	{
		document.getElementById("repass1").style.display="block";
	}
	else
	{
		document.getElementById("repass1").style.display="none";
	}
}

function validatePhone()
{
            var phone=document.fv.number;

            if(phone.value=="")
            {
                document.getElementById("number1").style.display="block";
              
            }
            else
            {
				document.getElementById("number1").style.display="none";
                
            }
}