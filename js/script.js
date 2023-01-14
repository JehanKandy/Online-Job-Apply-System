function validate_login(){
    var usern = document.forms['login_form']['usern'].value;
    var userpass = document.forms['login_form']['passn'].value;
    var usernameText = document.getElementById('username');
    var passText = document.getElementById('password');
    var userError = document.getElementById('usernError');
    var passError = document.getElementById('passError');
    var usernameInput = document.getElementById('usern');
    var passInput = document.getElementById('passn');

    if(usern == "" || usern == null){
        usernameText.style.color = "red";
        usernameInput.style.borderColor = "red";
        userError.style.color = "red";
        userError.innerHTML = "Username Cannot be Empty...!";
        return false;
    }

    if(userpass == "" || userpass == null){
        passText.style.color = "red";
        passInput.style.borderColor = "red";
        passError.style.color = "red";
        passError.innerHTML = "Password Cannot be Empty...!"
        return false;
    }
}


function validate_reg(){
    var regUser = document.forms['reg_form']['regusern'].value;
    var regEmail = document.forms['reg_form']['emailuser'].value;
    var pass = document.forms['reg_form']['regpassn'].value;
    var cpass = document.forms['reg_form']['regcpassn'].value;

    if(regUser == "" || regUser == null){
        document.getElementById('regusername').style.color = "red";
        document.getElementById('regusern').style.borderColor = "red";
        document.getElementById('usernError').innerHTML = "Username Cannot be Empty..!";
        document.getElementById('usernError').style.color = "red";
        return false;
    }

    if(regEmail == "" || regEmail == null){
        document.getElementById('regemail').style.color = "red";
        document.getElementById('emailuser').style.borderColor = "red";
        document.getElementById('emailError').innerHTML = "Email Cannot be Empty...!";
        document.getElementById('emailError').style.color = "red";
        return false;
    }
}
