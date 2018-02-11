var specialKeys = new Array();
function IsAlphaNumeric(e) 
{
specialKeys.push(8); //Backspace
specialKeys.push(9); //Tab
specialKeys.push(46); //Delete
specialKeys.push(36); //Home
specialKeys.push(35); //End
specialKeys.push(37); //Left
specialKeys.push(39); //Right
	var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
}
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
function logp()
{
	var pass=document.p.password;
	if(pass.value=="")
	{
		document.getElementById('paerr').innerHTML="Password is required";	
		return false;
	}
	else
	{
		document.getElementById('paerr').innerHTML="";	
		return true;
	}
}