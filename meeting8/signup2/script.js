const username=document.getElementById("username");
const email=document.getElementById("email");
const error_username=document.getElementById("error-username");
const error_email=document.getElementById("error-email");
const password=document.getElementById("password");
const error_password=document.getElementById("error-password");
const re_enter_password=document.getElementById("re-enter-password")
const error_re_enter_password=document.getElementById("error-re-enter-password")

let regex=/\^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/
let regex_whitespace=/\s+/ // simbol single spasi \s lebih dari satu spasi \s+


function check(){
    let user=username.value.trim()
    let mail=email.value.trim()
    let pass=password.value.trim()
    let enter=re_enter_password.value.trim()

    check_username(user);
    check_email(mail);
    check_password(pass);
    check_re_enter_password(enter);

}

function check_username(user){

    if(user.length!=0){
        if(user.length>=8){// check 8 char minimum
            if(regex.test(user[0])){ // check first char is alphabetic
                if(!(regex_whitespace.test(user))){ // check whitespace
                    username.value="";
                    error_username.style.color="GREEN";
                    error_username.innerHTML="username granted";
                }else{
                    username.value="";
                    error_username.style.color="RED";
                    error_username.innerHTML="cannot contain any whitespace";
                }
            }else{
            username.value="";
            error_username.style.color="RED";
            error_username.innerHTML="first charcater must be alphabetic";
            }
        }else{
            username.value="";
            error_username.style.color="RED";
            error_username.innerHTML="username minimum character is 8";
        }
    }else{
        username.value="";
        error_username.style.color="RED";
        error_username.innerHTML="username cannot be empty";
    }
}

function check_email(mail){
    if(mail.length!=0){
        if((mail.match(/@/gi))){
            if(!(mail.match(/.com/gi))){
                email.value="";
                error_email.style.color="GREEN";
                error_email.innerHTML="email granted";
            }else{
                email.value="";
                error_email.style.color="RED";
                error_email.innerHTML="missing .com";
            }

        }else{
        email.value="";
        error_email.style.color="RED";
        error_email.innerHTML="missing @";
        }
        

    }else{
        email.value="";
        error_email.style.color="RED";
        error_email.innerHTML="email cannot be empty";
    }

    
}

// function check_password(pass){
//     if(pass.length!=0){
//         if(pass.length>=8){
//             if(regex.test(pass[0])){
//                 if(!(pass.match(/^.*[a-z]/))){
//                     password.value="";
//                     error_password.style.color="green";
//                     error_password.innerHTML="password granted";
//                 }else{
//                     password.value="";
//                     error_password.style.color="red";
//                     error_password.innerHTML="the character;must be a capital";
//                 }
//             }else{
//                 password.value="";
//                 error_password.style.color="red";
//                 password.innerHTML="password minimum character is 8"


//             }

//         }
//     }
// }

function check_password(pass) {
    if (pass.length === 0) {
        password.value = "";
        error_password.style.color = "RED";
        error_password.innerHTML = "Password cannot be empty";
    } else if (pass.length < 8) {
        password.value = "";
        error_password.style.color = "RED";
        error_password.innerHTML = "Password minimum character is 8";
    } else if (!regex.test(pass)) { // Check if password contains at least one lowercase, one uppercase, and one number
        password.value = "";
        error_password.style.color = "RED";
        error_password.innerHTML = "Password harus ada huruf besar dan huruf kecil";
    } else {
        error_password.style.color = "GREEN";
        error_password.innerHTML = "Password granted";
    }
}
function check_re_enter_password(enter){

}



