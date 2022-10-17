function DoSearch(searchText){
    if(searchText.value==""){
        document.getElementById("searchclue").innerHTML="";
        return;
    }
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            document.getElementById("searchclue").innerHTML=this.responseText;
        }
    };
    xhr.open("GET","searchBook.php?name="+searchText.value,true);
    xhr.send();
}