/* get the input fields */

let headlineInput = document.getElementById('headline');
let timeInput = document.getElementById('time');
let dateInput = document.getElementById('date');
let summaryInput = document.getElementById('summary');
let articleInput = document.getElementById('article');
let authorInput = document.getElementById('author');



/* get error div by id */

let headlineError = document.getElementById('headline_error');
let timeError = document.getElementById('time_error');
let dateError = document.getElementById('date_error');
let summaryError = document.getElementById('summary_error');
let articleError = document.getElementById('article_error');
let authorError = document.getElementById('author_error');


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
    headlineError.innerHTML = "";
    timeError.innerHTML = "";
    dateError.innerHTML = "";
    summaryError.innerHTML = "";
    articleError.innerHTML = "";
    authorError.innerHTML = "";

}

function onsubmitform(evt) {
    resetValues();
    /* validate the headline */
    if(HeadlineInput.value === "") {
        showError(HeadlineError, "The Headline field is required");
    }
     else if(regexValid(NAME_REGEX, nameInput.value)){
        showError(HeadlineError, "Only letters and spaces are allowed");
    } 

    /* validate the date */
    if(dateInput.value === "") {
        showError(dateError, "The date field is required");
    }
  

    /* validate the summary */
    if(summaryInput.value === "") {
        showError(summaryError, "The summary field is required");
    }
    else if(regexValid(NAME_REGEX, summaryInput.value)){
        showError(phoneError, "Only letters and spaces are allowed");
    }

    /* validate the article*/
    if(articleInput.value === "") {
        showError(articleError, "The article field is required");
    }
    
 
     
     }

    if(errorExists){
        evt.preventDefault();
    }
