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
        document.getElementById('passError').innerHTML = "Password must be at least 6 characters"
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
    var userEmail = document.forms['request_otp']['emailPass'].value;

    if(username == "" || username == null){
        document.getElementById('username').style.color = "red";
        document.getElementById('passunser').style.borderColor = "red";
        document.getElementById('usernError').innerHTML = "Username Cannot be Empty..!";
        document.getElementById('usernError').style.color = "red";
        return false;
    }
    if(userEmail == "" || userEmail == null){
        document.getElementById('email').style.color = "red";
        document.getElementById('emailPass').style.borderColor = "red";
        document.getElementById('passError').innerHTML = "Email Cannot Be Empty..!"
        document.getElementById('passError').style.color = "red";
        return false;
    } 
} 
function validate_userOtp(){
    var otp = document.forms['veryfy_otp']['otpInput'].value;

    if(otp == "" || otp == null){
        document.getElementById('otp_no').style.color = "red";
        document.getElementById('otpInput').style.borderColor = "red";
        document.getElementById('otpError').innerHTML = "OTP can not be empty...!";
        document.getElementById('otpError').style.color = "red";
        return false;
    }
}

function valide_updatePass(){
    var Passuser = document.forms['update_pass']['updatePassUser'].value;
    var PassEmail = document.forms['update_pass']['updatePassEmail'].value;
    var passnew = document.forms['update_pass']['updatePasspass'].value;
    var cpassnew = document.forms['update_pass']['updatePasscpass'].value;

    if(Passuser == "" || Passuser == null){
        document.getElementById('updatePassU').style.color = "red";
        document.getElementById('updatePassUser').style.borderColor = "red";
        document.getElementById('updatePuserError').innerHTML = "Username Cannot be empty..!";
        document.getElementById('updatePuserError').style.color = "red";
        return false;
    }
    if(PassEmail == "" || PassEmail == null){
        document.getElementById('updatePassE').style.color = "red";
        document.getElementById('updatePassEmail').style.borderColor = "red";
        document.getElementById('updatePemailError').innerHTML = "Email Cannot be Empty..!";
        document.getElementById('updatePemailError').style.color = "red";
        return false;
    }
    if(passnew == "" || passnew == null){
        document.getElementById('updatePassp').style.color = "red";
        document.getElementById('updatePasspass').style.borderColor = "red";
        document.getElementById('updatePpassError').innerHTML = "Password Cannot be empty..!";
        document.getElementById('updatePpassError').style.color = "red";
        return false;
    }

    var newpasslength = passnew.length;
    if(newpasslength < 6){
        document.getElementById('updatePassp').style.color = "red";
        document.getElementById('updatePasspass').style.borderColor = "red";
        document.getElementById('updatePpassError').innerHTML = "New Password must be at least 6 characters";
        document.getElementById('updatePpassError').style.color = "red";
        return false;
    }

    if(cpassnew == "" || cpassnew == null){
        document.getElementById('updatePasscp').style.color = "red";
        document.getElementById('updatePasscpass').style.borderColor = "red";
        document.getElementById('updatePcpassError').innerHTML = "Confirm Password Cannot be empty...!"
        document.getElementById('updatePcpassError').style.color = "red";
        return false;
    }
    if(passnew != cpassnew){
        document.getElementById('updatePassp').style.color = "red";
        document.getElementById('updatePasscp').style.color = "red";
        document.getElementById('updatePpassError').style.color = "red";
        document.getElementById('updatePcpassError').style.color = "red";
        document.getElementById('updatePcpassError').innerHTML = "Passwords not Match...!";
        document.getElementById('updatePpassError').innerHTML = "Passwords not Match...!";
        return false;
    }
}
