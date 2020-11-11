function validate()
{
	var a = document.forms["form"]["name"].value;
	if(a=='')
	{
		alert("Name must be entered!!");
		return false;
	}
	var b = document.forms["form"]["mail"].value;
	var l=b.length;
	if(!(b.includes("@")))
	{
		alert("Invalid mail id!!");
		return false;
	}
	else if (b[b.indexOf("@")+1]==".")
	{
		alert("Invalid mail id!!");
		return false;
	}
	else if(b[0]==""||b[0]==".")
	{
		alert("Invalid mail id!!");
		return false;
	}
	else if((((l-(b.lastIndexOf(".")))-1)!=3)&&(((l-(b.lastIndexOf(".")))-1)!=2))
	{
		alert("Invalid mail id!!");
		return false;
	}
	else
	{
		for (var i = 0; i<l-1; i++)
		{
			if(b[i]=="."&&b[i+1]==".")
			{
				alert("Invalid mail id!!");
				return false;
			}
		}
		for (var i = 0; i<l-1; i++)
		{
			if(b[i]=="/"||b[i]=="+"||b[i]=="-"||b[i]=="*"||b[i]=="{"||b[i]=="}"||b[i]=="["||b[i]=="]"||b[i]==")"||b[i]=="("||b[i]=="!"||b[i]=="#"||b[i]=="$"||b[i]=="%"||b[i]=="^"||b[i]=="&"||b[i]=="="||b[i]==";"||b[i]==":"||b[i]==","||b[i]=="<"||b[i]==">"||b[i]=="?")
			{
				alert("Invalid mail id!!");
				return false;
			}
		}
	}
}