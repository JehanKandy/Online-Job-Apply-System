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

    if(pass == "" || pass == null){
        document.getElementById('regpassword').style.color = "red";
        document.getElementById('regpassn').style.borderColor = "red";
        document.getElementById('passError').innerHTML = "Password Cannot be Empty...!"
        document.getElementById('passError').style.color = "red";
        return false;
    }
    if(cpass == "" || cpass == null){
        document.getElementById('regcpassword').style.color = "red";
        document.getElementById('regcpassn').style.borderColor = "red";
        document.getElementById('cpassError').innerHTML = "Confirm Password Cannot be Empty....!"
        document.getElementById('cpassError').style.color = "red";
        return false;
    }

    var passlength = pass.length;
    if(passlength < 6){
        document.getElementById('regpassword').style.color = "red";
        document.getElementById('regpassn').style.borderColor = "red";
        document.getElementById('passError').innerHTML = "password must be at least 6 characters"
        document.getElementById('passError').style.color = "red";
        return false;
    }
    if(pass != cpass){
        document.getElementById('regcpassword').style.color = "red";
        document.getElementById('regcpassn').style.borderColor = "red";
        document.getElementById('cpassError').innerHTML = "Passwords Not Match....!"
        document.getElementById('cpassError').style.color = "red";
        document.getElementById('regpassword').style.color = "red";
        document.getElementById('regpassn').style.borderColor = "red";
        document.getElementById('passError').innerHTML = "Passwords Not Match....!"
        document.getElementById('passError').style.color = "red";
        return false;
    }
}

function otp_validate(){
    var username = document.forms['request_otp']['passunser'].value;
    var userEmail = document.forms['request_otp']['passemail'].values;

    if(username == "" || username == null){
        document.getElementById('username').style.color = "red";
        document.getElementById('passunser').style.borderColor = "red";
        document.getElementById('usernError').innerHTML = "Username Cannot be Empty..!";
        document.getElementById('usernError').style.color = "red";
        return false;
    }
}
