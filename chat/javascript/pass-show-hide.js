const pwd = document.querySelector(".form input[type = 'password']"),
togglebtn = document.querySelector(".form .field i");

togglebtn.onclick = ()=>{
    if(pwd.type == "password"){
        pwd.type = "text";
        togglebtn.classList.add('active');
    }else{
        pwd.type = "password";
        togglebtn.classList.remove('active');
    }
}