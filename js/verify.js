function verifyEmail(form) {

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var passwordFormat = /^(?=.*\d)(?=.*[a-z]).{8,}$/;
    if(!form.email.value.match(mailformat)) {
        alert("Invalid Email");
        form.email.focus();
        return false;
    }
    if(!form.password.value.match(passwordFormat)){
        alert("Your password should be greater than 8 characters and should contain a number");
        form.password.focus();
        return false;
    }
    return true;
}