function liveSearch(searchText){
    if(searchText.value==""){
        document.getElementById("suggession").innerHTML="";
        return;
    }
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            document.getElementById("suggession").innerHTML=this.responseText;
        }
    };
    xhr.open("GET","search_course.php?course_title="+searchText.value,true);
    xhr.send();
}