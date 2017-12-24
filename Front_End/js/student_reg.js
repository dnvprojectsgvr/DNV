function ch()
{
	if (fn())
	{
	if (mn())
	{
	if (ln())
	{
	if (fu())
	{
	if (fan())
	{
	if (ge())
	{
	if (dt_check())
	{
	if (cou())
	{
	if (yer())
	{
	if (rollr())
	{
	if (mob())
	{
	if (ema())
	{
	if (pass())
	{
	if (pass1())
	{
	if (sec())
	{
	if (secan())
	{
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	return false;
}
// Allow only Alphabates and White Space for Name
function lettersOnly(evt) {
	evt = (evt) ? evt : event;
	var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
	  ((evt.which) ? evt.which : 0));
	if( String.fromCharCode(charCode) == "'")
		return false;
	if (charCode == 32 || charCode ==8 || charCode == 46 || charCode == 37 || charCode == 39)
		return true;
	if (charCode > 31 && (charCode < 65 || charCode > 90) &&
	  (charCode < 97 || charCode > 122 || charCode == 222 || String.fromCharCode(charCode) == '"')){
		return false;
	}
	else
		return true;
}
function fn()
{
	var fna=document.p.fnam;
	var letters = /^[A-Za-z]+$/;
	if(fna.value=="")
	{
		document.getElementById('fnerr').innerHTML="Firstname is required";	
		//document.p.fnam.focus();
		return false;
	}
	else if(fna.value.match(letters))
	{
		document.getElementById('fnerr').innerHTML="";
		return true;
	}
	else
	{
		document.getElementById('fnerr').innerHTML="First name Should have Alaphabets Only";
		//document.p.fnam.focus();
		return false;
	}
}
function mn()
{
	var mna=document.p.mnam;
	var letters = /^[A-Za-z]+$/;
	if(mna.value=="")
	{
		document.getElementById('mnerr').innerHTML="";
		return true;	
	}
	if(!mna.value.match(letters))
	{
		document.getElementById('mnerr').innerHTML="Middle name Should have Alaphabets Only";
		return false;	
	}
	else
	{
		document.getElementById('mnerr').innerHTML="";
		return true;
	}
}
function ln()
{
	var lna=document.p.lnam;
	var letters = /^[A-Za-z]+$/;
	if(lna.value=="")
	{
		document.getElementById('lnerr').innerHTML="Last Name is required";	
		//document.p.lnam.focus();
		return false;
	}
	else if(lna.value.match(letters))
	{
		document.getElementById('lnerr').innerHTML="";
		return true;
	}
	else
	{
		document.getElementById('lnerr').innerHTML="Last Name Should have Alaphabets Only";
		//document.p.lnam.focus();
		return false;
	}
}
function genfullnam()
{
		document.getElementById('fullname').value = 
        document.getElementById('fname').value + ' ' + 
		document.getElementById('mname').value + ' ' +
        document.getElementById('lname').value;	
}
function fu()
{
	var f=document.p.funam;
	var letters = /^[A-Za-z\s]+$/;
    if(f.value=="")
	{
		document.getElementById('fuerr').innerHTML="Full Name is required";	
		//document.p.funam.focus();
		return false;
	}
	else if(f.value.match(letters))
	{
		document.getElementById('fuerr').innerHTML="";
		return true;
	}
	else
	{
		document.getElementById('fuerr').innerHTML="Full Name Should have Alaphabets Only";
		//document.p.funam.focus();
		return false;
	}	
}
function fan()
{
	var fa=document.p.fanam;
	var letters = /^[A-Za-z\s]+$/;
	if(fa.value=="")
	{
		document.getElementById('faerr').innerHTML="Father Name is required";	
		//document.p.fanam.focus();
		return false;
	}
	else if(fa.value.match(letters))
	{
		document.getElementById('faerr').innerHTML="";
		return true;
	}
	else
	{
		document.getElementById('faerr').innerHTML="Father Name Should have Alaphabets Only";
		//document.p.fanam.focus();
		return false;
	}	
}
function ge()
{
	var g=document.p.gen;
	if((g[0].checked==false) && (g[1].checked==false))
	{
		document.getElementById('generr').innerHTML="Please select Gender";
		//document.p.gen[0].focus();
		return false;
	}
	else
	{
		document.getElementById('generr').innerHTML="";
		return true;
	}	
}
function dt_check()
{
  var d=document.p.birthday_day;
  var m=document.p.birthday_month;
  var y=document.p.birthday_year;
  if(d.value==0)
  { 
    document.getElementById('birtherr').innerHTML="Select Day";
    return false;
  }
  else if(m.value==0)
  {
    document.getElementById('birtherr').innerHTML="Select Month";
    return false;
  }
  else if(((m.value==4) || (m.value==6) || (m.value==9) || (m.value==11)) && (d.value>30))
  {
    document.getElementById('birtherr').innerHTML="Invalid Date";
    return false;
  }
  else if((m.value==2) && (d.value>29) && (isLeapYear(y.value)))
  {
    document.getElementById('birtherr').innerHTML="Invalid Date";
    return false;
  }
  else if((m.value==2) && (d.value>28) && (!isLeapYear(y.value)))
  {
    document.getElementById('birtherr').innerHTML="Invalid Date";
    return false;
  }
  else if(y.value==0)
  {
    document.getElementById('birtherr').innerHTML="Select Year";
    return false;
  }
  else
  {
    document.getElementById('birtherr').innerHTML="";
    return true;
  }
}
function isLeapYear(yr)
{
  return ((yr % 4 == 0) && (yr % 100 != 0)) || (yr % 400 == 0);
}
function cou()
{
	var c=document.p.co;
	if(c.value=="Default")
	{	
		document.getElementById('coerr').innerHTML="Select Course";
		//c.focus();
		return false;
	}
	else
	{
		document.getElementById('coerr').innerHTML="";
		return true;
	}	
}
function yer()
{
	var y=document.p.ye;
	if(y.value=="Default")
	{	
		document.getElementById('yeerr').innerHTML="Please select year";
		//y.focus();
		return false;
	}
	else
	{
		document.getElementById('yeerr').innerHTML="";
		return true;
	}
}
function rollr()
{
	var ro=document.p.roll;
	var numbers = /^[0-9]+$/;
	if(ro.value=="")
	{
		document.getElementById('rollerr').innerHTML="Roll No is required";	
		//ro.focus();
		return false;
	}
	else if(ro.value.match(numbers))
	{
		document.getElementById('rollerr').innerHTML="";
		return true;
	}
	else
	{
		document.getElementById('rollerr').innerHTML="Roll No Should have numeric digits Only";
		//ro.focus();
		return false;
	}
}
function isNumber(event) {
  var key = window.event ? event.keyCode : event.which;
  //vKey = 86, cKey = 67
  
  if (event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 9 || event.keyCode == 17 || event.keyCode == 37 || event.keyCode == 39 || (event.keyCode == 17 && event.keyCode == 86) || (event.keyCode == 17 && event.keyCode == 67)) 			  {
	  return true;
  }
  else if ( key < 48 || key > 57 ) {
	  return false;
  }
  else return true;
}
function mob()
{
	var m=document.p.mo;
	var numbers = /^[0-9]+$/;
	if(m.value=="")
	{
		document.getElementById('moerr').innerHTML="Mobile no is required";	
		//document.p.mo.focus();
		return false;
	}
	else if(m.value.length<10 || m.value.length>10)
	{
		document.getElementById('moerr').innerHTML="Mobile no Length should be 10 numbers only";	
		//document.p.mo.focus();
		return false;
	}
	else if(m.value.match(numbers))
	{
		document.getElementById('moerr').innerHTML="";
		return true;
	}
	else
	{
		document.getElementById('moerr').innerHTML="Mobile number Should have numeric digits Only";
		//document.p.mo.focus();
		return false;
	}
}
function ema()
{
	var emai=document.p.em;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(emai.value=="")
	{
		document.getElementById('emerr').innerHTML="Email is required";	
		//document.p.em.focus();
		return false;
	}
	else if(emai.value.match(mailformat))
	{
		document.getElementById('emerr').innerHTML="";
		return true;
	}
	else
	{
		document.getElementById('emerr').innerHTML="Enter Valid Email";
		//document.p.em.focus();
		return false;
	}
}
function pass()
{
	var pw=document.p.pwd;
	var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
	if(pw.value=="")
	{
		document.getElementById('pwderr').innerHTML="Password is required";
		return false;
	}
	else if(!pw.value.match(strongRegex))
	{
		document.getElementById('pwderr').innerHTML="Password Must Contain At Least One UpperCase,OneLowerCase,One Digit,One Special Character And Password Length Should Be 8 to 255 Character";
		return false;
	}
	else
	{
		document.getElementById('pwderr').innerHTML="";	
		return true;
	}
}
function pass1()
{
	var pw=document.p.pwd;
	var pw1=document.p.pwde;
	var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
	if(pw1.value=="")
	{
		document.getElementById('pwdeerr').innerHTML="Password is required";
		return false;
	}
	else if(!pw1.value.match(strongRegex))
	{
		document.getElementById('pwdeerr').innerHTML="Password Must Contain At Least One UpperCase,OneLowerCase,One Digit,One Special Character And Password Length Should Be 8 to 255 Character";
		return false;
	}
	else if(pw1.value==pw.value)
	{
		document.getElementById('pwdeerr').innerHTML="Password match";
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
function genusi()
{
		document.getElementById('userid').value = 
        document.getElementById('yea').value +  
		document.getElementById('cos').value + 
		document.getElementById('roll').value;	
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
//	var con;
	if(secans.value=="")
	{
		document.getElementById('secaerr').innerHTML="Security Answer is required";	
		return false;
	}
	else if(secans.value.match(letters))
	{
		document.getElementById('secaerr').innerHTML="";
		return true;
/*		con=confirm("Are You Sure To Submit The Form");
	if(con==true)
	{
		document.p.value.Submit.focus();
		return true;
	}
	else
	{
		document.p.fnam.focus();
	}
*/
	}
	else
	{
		document.getElementById('secaerr').innerHTML="Security Answer Should have Alaphabets Only";
		return false;
	}
}