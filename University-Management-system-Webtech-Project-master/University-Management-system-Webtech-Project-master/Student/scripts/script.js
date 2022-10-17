function getElement(id)
{
    return document.getElementById(id);
}

function LoginValidation(){
    var hasError=false;
    var studentid=getElement("studentid");
    var password=getElement("password");
    var err_studentid=getElement("err_studentid");
    var err_password=getElement("err_password");
    if(studentid.value=="")
	{
        hasError=true;
        err_studentid.innerHTML="* Student ID Required";
        err_studentid.focus();
    }
    else if(studentid.search(" ")!=-1 && studentid.length!=7)
	{
        hasError=true;
        err_studentid.innerHTML="* Student ID can not contain spaces and must have 7 characters long";
        err_studentid.focus();
    }
    if(password.value=="")
	{
        hasError=true;
        err_password.innerHTML="* Password Required";
        err_password.focus();
    }
    else if(password.length<6)
	{
        hasError=true;
        err_password.innerHTML="* Password must be 6 characters long";
        err_password.focus();
    }
    return !hasError;
}