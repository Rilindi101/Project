
/////////////////////////SIGN UP /////////////////////////////////////////


var button = document.getElementById("signUP");

var rightSideNameMsg = document.getElementById("rightSideNameMsg");

var emailMsg = document.getElementById("emailMsg");


var rightSidePassMsg = document.getElementById("rightSidePassMsg");

var usernameRegex = /^[A-Z]\w+[._-]?\w+/;

var emailRegex = /^\w+[._-]?\w+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;

var passwordRegex = /^[A-Z]\w+[._-]?\w+/;


button.addEventListener("click", function(event){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
   

    if(username == "" || username == null){
      rightSideNameMsg.innerText="Fill Username field!";
        event.preventDefault();
    }else{
        if(usernameRegex.test(username)){
          rightSideNameMsg.innerText="";
        }else{
          rightSideNameMsg.innerText="First letter needs to be uppercase";
            event.preventDefault();
        }

    }
    if(email == ""){
      emailMsg.innerText="Fill email!";
      event.preventDefault();
  }else{
      if(emailRegex.test(email) == true){
          emailMsg.innerText="";
      }else{
        emailMsg.innerText="Error email";
        event.preventDefault();
      }
    
  }


    if(password =="" || password == null){
      rightSidePassMsg.innerHTML="fill password field!";
      event.preventDefault();
     }else{
         if(passwordRegex.test(password)){
             rightSidePassMsg.innerText="";
         }else{
              rightSidePassMsg.innerText="first letter needs to be uppercase";
              event.preventDefault();
         }
     }
    


})