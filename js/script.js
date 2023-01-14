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
