function insertData(event) {
    event.preventDefault();

    var nid = document.getElementsByName("nid")[0].value;
    var name = document.getElementsByName("name")[0].value;
    var gender = document.getElementsByName("gender")[0].value;
    var group1 = document.getElementsByName("group1")[0].value;
    var bdate = document.getElementsByName("bdate")[0].value;


    var xhr = new XMLHttpRequest();
    xhr.open("POST","http://localhost/MVCPHP/model/insertdata.php",true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function(){
        if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
            alert(xhr.responseText);
        }
    };
    xhr.send("nid="+encodeURIComponent(nid)+"&name="+encodeURIComponent(name)+"&gender="+encodeURIComponent(gender)+"&group1="+encodeURIComponent(group1)+"&bdate="+encodeURIComponent(bdate));
}

