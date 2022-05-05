/* get the input fields */

let headlineInput = document.getElementById('headline');
let timeInput = document.getElementById('time');
let dateInput = document.getElementById('date');
let summaryInput = document.getElementById('summary');
let articleInput = document.getElementById('article');
let fNameInput = document.getElementById('first_name');
let lNameInput = document.getElementById('last_name');


/* get error div by id */

let headlineError = document.getElementById('headline_error');
let timeError = document.getElementById('time_error');
let dateError = document.getElementById('date_error');
let summaryError = document.getElementById('summary_error');
let articleError = document.getElementById('article_error');
let centreError = document.getElementById('centre_error');


/* Regex pattern */
const NAME_REGEX = /^[a-zA-Z-' ]*$/;
const ADDRESS_REGEX = /^[0-9a-zA-Z-', ]*$/;
const PHONE_REGEX = /^\(?\s*\d{1,4}\s*\)?\s*[\d\s]{5,10}$/;
const EMAIL_REGEX = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
const DATE_REGEX = /^[0-9{4})-([0-9]{2}-{[0-9]{2})$/;




submitBtn.addEventListener('click', onsubmitform);

let errorExists = false;

function showError(errorField, errorMessage) {
    errorExists = true;
    errorField.innerHTML = errorMessage;  
}

function regexValid(regex, str) {
    return regex.test(str);
}


function isSelected(inputField){
    let Selected = false;
    for(let i = 0; i != inputFieldInput.length; i++) {
        if(inputFieldInput[i].checked) {
           Selected = true;
           break;
        }
    }

    return Selected;
}


function resetValues() {
    errorExists = false;
    HeadlineError.innerHTML = "";
    timeError.innerHTML = "";
    dateError.innerHTML = "";
    emailError.innerHTML = "";
    dobError.innerHTML = "";
    centreError.innerHTML = "";
    insuranceError.innerHTML="";
    preferencesError.innerHTML="";
}

function onsubmitform(evt) {
    resetValues();
    /* validate the name */
    if(nameInput.value === "") {
        showError(nameError, "The name field is required");
    }
    else if(regexValid(NAME_REGEX, nameInput.value)){
        showError(nameError, "Only letters and spaces are allowed");
    }

    /* validate the address */
    if(addressInput.value === "") {
        showError(addressError, "The address field is required");
    }
    else if(regexValid(address_REGEX, addressInput.value)){
        showError(addressError, "Only letters, numbers and spaces are allowed");
    }

    /* validate the phone */
    if(phoneInput.value === "") {
        showError(phoneError, "The phone field is required");
    }
    else if(regexValid(phone_REGEX, phoneInput.value)){
        showError(phoneError, "Phone number should be in (##) ######### format");
    }

    /* validate the email */
    if(emailInput.value === "") {
        showError(emailError, "The email field is required");
    }
    else if(regexValid(email_REGEX, emailInput.value)){
        showError(emailError, "Invalid email format");
    }

    /* validate the dateOfBirth */
    if(dobInput.value === "") {
        showError(dobError, "The date of birth field is required");
    }
    else if(regexValid(dob_REGEX, dobInput.value)){
        showError(dobError, "Invalid date of birth format");
    }

    /* validate the centre */
    if(centreInput.value === "") {
        showError(centreError, "The medical centre field is required");
    }
    
     /* validate insurance */
     if(!isSelected(insuranceInput)) {
        showError(centreError, "The insurance field is required");
     }
    }
     /* validate preferences */
     if(!isSelected(preferenceInput)) {
        showError(preferencesError, "The preference field is required");
     }

    if(errorExists){
        evt.preventDefault();
    }
