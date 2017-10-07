
function createrequest()
{
	try{
		request=new XMLHttpRequest();
	}
	catch(tryMS)
	{
		try{
			request=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(otherMS)
		{
			try{
				request=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(failed){
				
				alert("request not created");
			}
		}
	}
	return request;
}

function activeobject(e)
{
	
	if(e.target)
	{
		var activeobj=e.target;
	}
	else if(e.srcElement){
		var activeobj=e.srcElement;
	}
	return activeobj;
}