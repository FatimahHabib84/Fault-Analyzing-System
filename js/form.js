function log(){
    var err = document.getElementsByClassName("err")
    var uname = document.form.uname.value;
    var pass = document.form.pass.value;
    if(uname !="" && pass !=""){
        window.location.href="/plant.php";
        }
    else{
    if(uname==""){
        err[0].style.visibility = "visible";
    }else{
        err[0].style.visibility = "hidden";
    }
    if(pass==""){
        err[1].style.visibility = "visible";
    }else{
        err[1].style.visibility = "hidden";
    }
}

}