
function validate(form, event) {
    //event.preventDefault();
    let isValid = true;
    if (!validName(form.fname.value)){
        isValid = false;
        setError("fname", "Enter a valid first name");
    }
    if(!validName(form.fname.value)){
        isValid = false;
        setError("lname", "Enter a valid last name");
    }
    if(!emailIsValid(form.email.value)){
        isValid = false;
        setError("email", "Enter a valid email");
    }
    if(!(passwordIsValid(form.pswd.value))){
        isValid = false;
        setError("pswd", "Password must be 8 character long");
    }
    if(!passwordAreEqual(form.pswd.value, form.cpswd.value)){
        isValid = false;
        setError("cpswd", "Your passwords much match");
    }
    return isValid;           
}

function setError(name, error){
    document.getElementById(name + "-rem").innerHTML = error;
}
function validName(x) {
    
    for(var i = 0; i<x.length; i++){
            if (!isNaN(x.charAt(i))){
                return false;
            }
        }
    
    return true;
}
const emailIsValid = (email) => {
    if (typeof email !== 'string') {
        return false;
    } else {
        const exp = new RegExp(
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
        );
        return exp.test(email);
    }
};
// const passwordIsValid = (password) => {
//     if (typeof password !== 'string') {
//         return false;
//     } else {
//         const exp = new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/);
//         return exp.test(password);
//     }
// };
const passwordAreEqual = (password, confirmPassword) => {
    if (typeof password !== 'string' || typeof confirmPassword !== 'string') {
        return false;
    } else {
        return confirmPassword === password;
    }
};
const passwordIsValid = (password) => {
    if (typeof password !== 'string') {
        return false;
    } else {
        
        return (password.length >= 8);
    }
};