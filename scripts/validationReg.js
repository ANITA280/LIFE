// this is the function for validating the form
function checkForm() {
    // collecting user inputs
    firstname = document.getElementById("firstName").value;
    lastname = document.getElementById("LastName").value;
    Email = document.getElementById("EmailAddress").value;
    //calls a function checkEmail to check the email format with regex pattern
    emailResult = checkEmail(Email);

    confirmEmail = document.getElementById("ConfirmEmail").value;
    //calls another function checkConfirmEmail to see whether it matched witht
    confirmEmailResult = checkConfirmEmail(confirmEmail);

    phoneNumber = document.getElementById("Number").value;
    //calls another function isInFormat to check whether the number is in asutralian format
    phoneInFormat = isInFormat(phoneNumber);

    //taking age input from a slider 
    var slider = document.getElementById("myRange").value;
    slider.oninput = function () {
        age = this.value;
        parseInt(age);

    }
    //assigning the age variable  to the integer value 
    age = parseInt(age);

    //age is checked if it's within the range by calling the function eligibleAge
    ageCheck = eligibleAge(age);

    studentStatus1 = document.getElementById("Y").value;
    studentStatus2 = document.getElementById("N").value;
    EmploymentStatus1 = document.getElementById("Yes").value;
    EmploymentStatus2 = document.getElementById("No").value;
    //checking for empty inputs and display error 
    if (firstname == "") {
        hideAllErrors();
        document.getElementById("firstnameError").style.display = "block";
        document.getElementById("firstName").select();
        document.getElementById("firstName").focus();
        return false;
    }
    else if (lastname == "") {
        hideAllErrors();
        document.getElementById("lastnameError").style.display = "block";
        document.getElementById("LastName").select();
        document.getElementById("LastName").focus();
        return false;

    }

    else if (Email == "") {
        hideAllErrors();
        document.getElementById("emailError").style.display = "block";
        document.getElementById("EmailAddress").select();
        document.getElementById("EmailAddress").focus();
        return false;
    }
    else if (!emailResult) {
        hideAllErrors();
        document.getElementById("emailFormatError").style.display = "block";
        document.getElementById("EmailAddress").select();
        document.getElementById("EmailAddress").focus();
        return false;
    }

    else if (confirmEmail == "") {
        hideAllErrors();
        document.getElementById("ConfirmEmailError").style.display = "inline";
        document.getElementById("ConfirmEmail").select();
        document.getElementById("ConfirmEmail").focus();
        return false;

    }
    else if (!confirmEmailResult) {
        hideAllErrors();
        document.getElementById("ConfirmEmailError").style.display = "block";
        document.getElementById("ConfirmEmail").select();
        document.getElementById("ConfirmEmail").focus();
        return false;
    }
    else if (phoneNumber == "") {
        hideAllErrors();
        document.getElementById("numberError").style.display = "block";
        document.getElementById("Number").select();
        document.getElementById("Number").focus();
        return false;
    }
    else if (!phoneInFormat) {
        hideAllErrors();
        document.getElementById("numberFormatError").style.display = "block";
        document.getElementById("Number").select();
        document.getElementById("Number").focus();
        return false;
    }
    else if (age == "") {
        hideAllErrors();
        document.getElementById("AgeError").style.display = "block";
        document.getElementById("myRange").select();
        document.getElementById("myRange").focus();
        return false;
    }
    else if (!ageCheck) {
        hideAllErrors();
        document.getElementById("AgeError").style.display = "block";
        document.getElementById("myRange").select();
        document.getElementById("myRange").focus();
        return false;
    }

    alert("submitted");
    return true;

}

//function for  checking  proper number format
function isInFormat(Number) {
    var pattern = /^\+61\s([0-9]){3}\s([0-9]){3}\s([0-9]){3}$/;
    if (pattern.test(Number)) {
        return true;
    } else {
        return false;
    }
}
//function for checking proper email format
function checkEmail(inputvalue) {
    var pattern = /^[^@]+@[^@]+\.[^@]+$/;
    if (pattern.test(inputvalue)) {
        return true;
    } else {
        return false;
    }

}

//function for checking that the confirm email matched the input email
function checkConfirmEmail(inputEmail) {
    mystring = String(Email);
    console.log(mystring);
    mystring2 = String(inputEmail);
    console.log(mystring);

    if (mystring.localeCompare(mystring2) == 0) {


        return true;
    }
    document.getElementById("ConfirmEmailError").innerHTML = "The mail does not match with the input email";
    document.getElementById("ConfirmEmailError").style.display = "inline";
    return false;
}
//function for checking the age is above 16 or not
function eligibleAge(age) {
    if (age < 16) {
        document.getElementById("AgeError").innerHTML = "Sorry age has to be 16 or above to be eligibe"
        document.getElementById("AgeError").style.display = "inline";
        return false;
    }
    return true;
}


//fucntion for hiding all the errors by default
function hideAllErrors() {
    document.getElementById("firstnameError").style.display = "none";
    document.getElementById("lastnameError").style.display = "none"
    document.getElementById("numberError").style.display = "none";
    document.getElementById("numberFormatError").style.display = "none";

    document.getElementById("emailError").style.display = "none";
    document.getElementById("emailFormatError").style.display = "none";
    document.getElementById("ConfirmEmailError").style.display = "none";
    document.getElementById("AgeError").style.display = "none";
    document.getElementById("StudentStatError").style.display = "none";
    document.getElementById("EmploymentError").style.display = "none";

}