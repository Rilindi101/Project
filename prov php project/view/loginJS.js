





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








    
    

   