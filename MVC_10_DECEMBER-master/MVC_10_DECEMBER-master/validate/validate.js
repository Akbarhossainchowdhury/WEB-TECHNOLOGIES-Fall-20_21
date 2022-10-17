function getElement(id){
    return document.getElementById(id);
}

function doLoginValidation(){
    refreshLog();
    var hasError=false;
    var username=getElement("username");
    var password=getElement("password");
    var err_username=getElement("err_username");
    var err_password=getElement("err_password");
    if(username.value==""){
        hasError=true;
        err_username.innerHTML="* Username Required";
        err_username.focus();
    }
    if(password.value==""){
        hasError=true;
        err_password.innerHTML="* Password Required";
        err_password.focus();
    }
    return !hasError;
}