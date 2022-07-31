var username = document.getElementById("username");
var password = document.getElementById("password");
var confirmPassword = document.getElementById("confirmPassword");
var cardholderName = document.getElementById("cardholderName");
var cardNumber = document.getElementById("cardNumber");
var cardExpiry = document.getElementById("cardExpiry");
var cardCVV = document.getElementById("cardCVV");
var signUpButton = document.getElementsByTagName("button")[0];
var accountType = document.getElementById("accountType");

var cardDetected = false;

//apply validation functions to each input field's oninput property
//when you type a single character into a field, oninput attribute will fire
username.oninput = function () { isNotEmpty(username.id) };
password.oninput = function () { isStrongPassword() };
confirmPassword.oninput = function () { isConfirmPassword() };
cardholderName.oninput = function () { isNotEmpty(cardholderName.id) };
cardNumber.oninput = function () { isValidCard() };
cardExpiry.oninput = function () { isNotEmpty(cardExpiry.id) };
cardCVV.oninput = function () { isNotEmpty(cardCVV.id) };
accountType.onchange = function () { isValidAccountType() };

/**
* if corresponding field is not empty, display green border around input field,  
* else display red border and error message
*
* @param {string} id id of the corresponding field
*/
function isNotEmpty(id) {
    let input = document.getElementById(id);
    let message = document.getElementById(`${id}Error`);
    if (input.value.length > 0) {
        input.classList.remove("error");
        input.classList.add("success");

        message.classList.add("hide");
    } else {
        input.classList.remove("success");
        input.classList.add("error");

        message.innerHTML = "Field cannot be left blank.";
        message.classList.remove("hide");
    }
    checkCompletion();
}
/** 
* if password is at least 6 characters in length, display green border around input field
* else display red border and an error message
*/
function isStrongPassword() {
    let message = document.getElementById("passwordError");

    if (password.value.length >= 6) {
        password.classList.remove("error");
        password.classList.add("success");

        message.classList.add("hide");
    } else {
        password.classList.remove("success");
        password.classList.add("error");

        message.innerHTML = "Password must include at least 6 characters.";
        message.classList.remove("hide");
    }
    checkCompletion();
}

/** 
* if passwords match, display green border around input field
* else display red border and an error message
*/
function isConfirmPassword() {
    let message = document.getElementById("confirmPasswordError");

    if (confirmPassword.value == password.value) {
        confirmPassword.classList.remove("error");
        confirmPassword.classList.add("success");

        message.classList.add("hide");
    } else {
        confirmPassword.classList.remove("success");
        confirmPassword.classList.add("error");

        message.innerHTML = "Passwords must match.";
        message.classList.remove("hide");
    }
    checkCompletion();
}

function isValidAccountType() {
    let message = document.getElementById("accountTypeError");

    if (accountType.value == "seller" || accountType.value == "buyer") {
        accountType.classList.remove("error");
        accountType.classList.add("success");

        message.classList.add("hide");
    } else {
        accountType.classList.remove("success");
        accountType.classList.add("error");

        message.innerHTML = "Please select an account type.";
        message.classList.remove("hide");
    }
    checkCompletion();
}

/**
* if card is valid, display green border around input field
* else display red border and an error message
*/
function isValidCard() {
    let message = document.getElementById("cardNumberError");
    detectCard();

    if (cardDetected == true && cardNumber.value.length == 19) {
        cardNumber.classList.remove("error");
        cardNumber.classList.add("success");

        message.classList.add("hide");
    } else {
        cardNumber.classList.remove("success");
        cardNumber.classList.add("error");

        message.innerHTML = "Please enter a valid card number.";
        message.classList.remove("hide");
    }

    formatCardNumber();
    checkCompletion();
}

/**
*checks for the card type based on the first 2 digits:
*
* visa 40-49,
*
* mastercard 51-55,
*
* amex 33 or 37.
*/
function detectCard() {
    let cardNumber = document.getElementById("cardNumber").value;
    var cardImage = document.getElementById("cardImage");

    //when field is empty, hide cardImage
    //and set undetected card
    if (cardNumber.length == 0) {
        cardImage.classList.add("hide");
        cardDetected = false;
    }
    //check first digit for a 4
    //if true, display cardImage as visa-logo and set detected card
    //else hide cardImage and set undetected card
    if (cardNumber.length == 1) {
        if (Number(cardNumber) == 4) {
            cardImage.src = "images/visa.png";
            cardImage.classList.remove("hide");
            cardDetected = true;
        } else {
            cardImage.classList.add("hide");
            cardDetected = false;
        }
    }
    //check next digit for a value 51-55 or 33/37
    if (cardNumber.length == 2) {
        if (Number(cardNumber) >= 51 && Number(cardNumber) <= 55) {
            cardImage.src = "images/mastercard.png";
            cardImage.classList.remove("hide");
            cardDetected = true;
        } else if (Number(cardNumber) == 33 || Number(cardNumber) == 37) {
            cardImage.src = "images/amex.png";
            cardImage.classList.remove("hide");
            cardDetected = true;
        }
    }
}

/** 
* inserts a space between every 4 characters in the card number
*/
function formatCardNumber() {
    var foo = document.getElementById("cardNumber").value.split(" ").join("");
    if (foo.length > 0) {
        foo = foo.match(new RegExp('.{1,4}', 'g')).join(" ");
    }
    document.getElementById("cardNumber").value = foo;
}

/**
 * checks if all fields are validated
 * 
 * toggles the sign up button disabled attribute
 */
function checkCompletion() {
    if (
        username.classList.contains("success") &&
        password.classList.contains("success") &&
        confirmPassword.classList.contains("success") &&
        cardholderName.classList.contains("success") &&
        cardNumber.classList.contains("success") &&
        cardExpiry.classList.contains("success") &&
        cardCVV.classList.contains("success") &&
        accountType.classList.contains("success")
    ) {
        signUpButton.disabled = false;
    } else signUpButton.disabled = true;
}