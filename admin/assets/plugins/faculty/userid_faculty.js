$(document).ready(function()
{
$("#userid").keyup(function(e)
{ 
var userid = $("#userid").val();
var msgbox = $("#status");

if(userid.length > 7)
{
$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

$.ajax({  
    type: "POST",  
    url: "ajax.php",  
    data: "userid="+ userid,  
    success: function(msg){  
   $("#status").ajaxComplete(function(event, request){ 
	if(msg == 'OK')
	{ 
	    //$("#userid").removeClass("red");
	    //$("#userid").addClass("green");
	    //$("#status").html('availabilitydone');
	    $("#userid").attr('style','border:1px solid #008000');
        msgbox.html('<img src="available.png" align="absmiddle">');
	}  
	else  
	{  
	    //$("#userid").removeClass("green");
		//$("#userid").addClass("red");
		$("#userid").attr('style','border:1px solid #FF0000');
		msgbox.html(msg);
	}  
   
   });
   } 
   
  }); 

}
else
{
//$("#userid").addClass("red");
$("#userid").attr('style','border:1px solid #FF0000');
$("#status").html('<font color="#cc0000">Please enter atleast 8 characters</font>');
}
return false;
});

});