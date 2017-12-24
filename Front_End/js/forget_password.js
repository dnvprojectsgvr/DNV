function logu()
{
	var lonam=document.p.userid;
	if(lonam.value=="")
	{
		document.getElementById('uierr').innerHTML="UserId is required";	
		//document.p.userid.focus();
		return false;
	}
	else
	{
		document.getElementById('uierr').innerHTML="";	
		return true;
	}
}
function sec()
{
	var secq=document.p.secr;
	if(secq.value=="Default")
	{	
		document.getElementById('secerr').innerHTML="Please Select Security Question";
		//secq.focus();
		return false;
	}
	else
	{
		document.getElementById('secerr').innerHTML="";
		return true;
	}
}
function secan()
{
	var secans=document.p.seca;
	var letters = /^[A-Za-z]+$/;
	if(secans.value=="")
	{
		document.getElementById('secaerr').innerHTML="Security Answer is required";	
		//document.p.seca.focus();
		return false;
	}
	else
	{
		document.getElementById('secaerr').innerHTML="";
		return true;
	}
/*	else if(fna.value.match(letters))
	{
		document.getElementById('secaerr').innerHTML="";
		return true;
	}
	else
	{
		document.getElementById('secaerr').innerHTML="Security Answer Should have Alaphabets Only";
		document.p.seca.focus();
		return false;
	}*/
}
function pass()
{
	var pw=document.p.pwd;
	var pw1=document.p.pwde;
	if(pw.value=="")
	{
		document.getElementById('pwderr').innerHTML="Password is required";
		//document.p.pwd.focus();
		return false;
	}
	else if(pw.value.length<8 || pw.value.length>20)
	{
		document.getElementById('pwderr').innerHTML="Password Length should be 8 to 20 Characters";	
		//document.p.pwd.focus();
		return false;
	}
	else
	{
		document.getElementById('pwderr').innerHTML="";	
	if(pw1.value=="")
	{
		document.getElementById('pwdeerr').innerHTML="Password is required";
		//document.p.pwde.focus();
		return false;
	}
	else if(pw1.value.length<8 || pw1.value.length>20)
	{
		document.getElementById('pwdeerr').innerHTML="Password Length should be 8 to 20 Characters";	
		//document.p.pwde.focus();
		return false;
	}
	else if(pw1.value==pw.value)
	{
		document.getElementById('pwdeerr').innerHTML="Password match";
		document.p.value.Submit.focus();
		return true;
	}
	else if(pw1.value!=pw.value)
	{
		document.getElementById('pwdeerr').innerHTML="Password do not match";
		document.p.pwd.focus();
		document.p.pwde.value="";
		document.p.pwd.value="";
		return false;
	}
	else
	{
		document.getElementById('pwdeerr').innerHTML="";	
		return true;
	}
	}
}