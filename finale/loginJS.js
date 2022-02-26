





////////////////////LOGIN PART/////////////////////////////
        var button = document.getElementById("loginBtn");

        var usernameMsg = document.getElementById("usernameMsg");
        
        var passwordMSG = document.getElementById("passwordMSG");

        var usernameRegex = /^[A-Z]\w+[._-]?\w+/;

        var passwordRegex = /^[A-Z]\w+[._-]?\w+/;
        

        button.addEventListener("click", function(event){
            var username1 = document.getElementById("username1").value;
            var password1 = document.getElementById("password1").value;

           

            if(username1 == "" || username1 == null){
                usernameMsg.innerText="Fill Username field!";
                event.preventDefault();
            }else{
                if(usernameRegex.test(username1)){
                    usernameMsg.innerText="";
                }else{
                    usernameMsg.innerText="error username";
                    event.preventDefault();
                }

            }
            if(password1 =="" || password1 == null){
             passwordMSG.innerHTML="fill password field!";
             event.preventDefault();
            }else{
                if(passwordRegex.test(password1)){
                    passwordMSG.innerText="";
                }else{
                     passwordMSG.innerText="error password"
                     event.preventDefault();
                }
            }
            


        })






/////////////////////////SIGN UP /////////////////////////////////////////



    var button = document.getElementById("signUP");

    var rightsideNameMsg = document.getElementById("rightsideNameMsg");
    
    var emailMsg = document.getElementById("emailMsg");
    
    
    var rightsidePassMsg = document.getElementById("rightsidePassMsg");

    var usernameRegex = /^[A-Z]\w+[._-]?\w+/;

    var emailRegex = /^\w+[._-]?\w+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;

    var passwordRegex = /^[A-Z]\w+[._-]?\w+/;
    

    button.addEventListener("click", function(event){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var email = document.getElementById("email").value;
       

        if(username == "" || username == null){
          rightsideNameMsg.innerText="Fill Username field!";
            event.preventDefault();
        }else{
            if(usernameRegex.test(username)){
              rightsideNameMsg.innerText="";
            }else{
              rightsideNameMsg.innerText="First letter needs to be uppercase";
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
          rightsidePassMsg.innerHTML="fill password field!";
          event.preventDefault();
         }else{
             if(passwordRegex.test(password)){
                 rightsidePassMsg.innerText="";
             }else{
                  rightsidePassMsg.innerText="first letter needs to be uppercase"
                  event.preventDefault();
             }
         }
        


    })

    
    

   