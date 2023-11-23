function validateLoginForm() {
    removeAllErrorMessage()
    var loginEmail = document.getElementById('loginEmail').value;
    var loginPassword = document.getElementById('loginPassword').value;
    var emailValidationMessage = isValidEmail(loginEmail);
    var passwordValidationMessage = isValidPassword(loginPassword);
    if (emailValidationMessage != "valid") {
        showErrorMessage('loginEmail', emailValidationMessage);
        return false;
    }
    if (passwordValidationMessage != "valid") {
        showErrorMessage('loginPassword', passwordValidationMessage);
        return false;
    }

    
    return true;
    
    
}
function validateSignupForm() {
    removeAllErrorMessage();
    var fistName = document.getElementById('firstName').value;
    var firstNameValidationMessage;
    var lastName = document.getElementById('lastName').value;
    var lastNameValidationMessage;
    var signUpEmail = document.getElementById('signUpEmail').value;
    var emailValidationMessage;
    var signUpPassword = document.getElementById('signUpPassword').value;
    var passwordValidationMessage;
    var signUpConfirmPassword = document.getElementById('signUpConfirmPassword').value;
    var ConfirmPasswordValidationMessage;
    var phoneNumber = document.getElementById('phone-number').value;
    var phoneNumberValidationMessage;
    firstNameValidationMessage = isValidName(fistName);
    if (firstNameValidationMessage != "valid") {
        showErrorMessage('firstName', firstNameValidationMessage);
        return false;
    }
    lastNameValidationMessage = isValidName(lastName);
    if (lastNameValidationMessage != "valid") {
        showErrorMessage('lastName', lastNameValidationMessage);
        return false;
    }
    emailValidationMessage = isValidEmail(signUpEmail);
    if (emailValidationMessage != "valid") {
        showErrorMessage('signUpEmail', emailValidationMessage);
        return false;
    }
    passwordValidationMessage = isValidPassword(signUpPassword);
    if (passwordValidationMessage != "valid") {
        showErrorMessage('signUpPassword', passwordValidationMessage);
        return false;
    }
    ConfirmPasswordValidationMessage = isValidPassword(signUpConfirmPassword);
    if (ConfirmPasswordValidationMessage != "valid") {
        showErrorMessage('signUpConfirmPassword', ConfirmPasswordValidationMessage);
        return false;
    }
    if (signUpPassword != signUpConfirmPassword) {
        showErrorMessage('signUpConfirmPassword', "Password not match");
        return false;
    }
    phoneNumberValidationMessage = isValidPhoneNumber(phoneNumber);
    if (phoneNumberValidationMessage != "valid") {
        showErrorMessage('phone-number', phoneNumberValidationMessage);
        return false;
    }
    return true;
}

function isValidEmail(email) {
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (email == "") {
        return "Please fill the field";
    }
    if (emailRegex.test(email) == false) {
        return "This is not a valid email";
    }
    return "valid";
}
function isValidPassword(password) {
    const minLength = 8;
    const maxLength = 32;
    const letterNumberRegexSpecialChar = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,}$/;
    if (password == "") {
        return "Please fill the field";
    }
    if (password.length < minLength || password.length > maxLength) {
        return "Password length should be minimum 8 & maximum 32 characters.";
    }
    if (!letterNumberRegexSpecialChar.test(password)) {
		return "Password should contain alphabetic, numeric and special characters.";
	}
    return "valid";
}
function isValidName(name) {
    var specialChars = /[@!#$%^&*()_+[\]{}\\|;:'",.<>\/?0-9]/;
    if (name == "") {
        return "Please fill the field";
    }
    if (name.length < 2 || name.length > 20) {
        return "Name is too short or too long"
    }
    if (specialChars.test(name)) {
        return "The name should not contain numbers or special characters."; // Name contains special characters
    }
    return "valid";
}
function isValidPhoneNumber(number) {
     // Regular expression to check if phone number contains only numbers
     var onlyNumbers = /^\d+$/;

     if (!onlyNumbers.test(number)) {
         return "Phone number contains non-numeric characters"; // Phone number contains only numbers
     }
     return "valid"; // Phone number contains non-numeric characters
}
function removeAllErrorMessage() {
    var allErrorFiled = document.getElementsByClassName('error-input');
    var allErrorMessage = document.getElementsByClassName('error-message');
    var i;
    for (i = (allErrorFiled.length - 1); i >= 0; i--){
        allErrorFiled[i].classList.remove('error-input');
    }
    for (i = (allErrorMessage.length - 1); i >= 0; i--){
        allErrorMessage[i].remove();
    }
}

function showErrorMessage(inputID, message) {
    var inputBox = document.getElementById(inputID);
    inputBox.classList.add('error-input');
    var ErrorMessageElement = document.createElement('p');
    ErrorMessageElement.classList.add('error-message');
    ErrorMessageElement.innerHTML = message;
    inputBox.parentNode.insertBefore(ErrorMessageElement, inputBox.nextSibling);

}