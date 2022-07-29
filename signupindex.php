<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="card shadow" style="margin-top: 10vh;">
        <div class="card-body">
            <h3 class="card-title">Create your account</h3>
            <h6 class="indent">Login Information</h6>
            <form name="frmSignup" method="post" action="signup.php">
                <div>
                    <input class="form-control" id="username" name="username" type="text" placeholder="Username" />
                    <div class="error hide" id="usernameError"></div>
                </div>
                <div>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                    <div class="error hide" id="passwordError"></div>
                </div>
                <div>
                    <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm Password" />
                    <div class="error hide" id="confirmPasswordError"></div>
                </div>

                <hr />

                <div style="padding: 0px;" class="name-container">
                    <h6 class="indent name-container2">
                        Credit Card Information
                    </h6>
                    <div style="padding-right: 0.5em;" class="name-container3">
                        <img class="hide" id="cardImage" />
                    </div>
                </div>
                <div>
                    <input class="form-control" id="cardholderName" name="cardholderName" type="text" placeholder="Cardholder Name" />
                    <div class="error hide" id="cardholderNameError"></div>
                </div>
                <div>
                    <input class="form-control" id="cardNumber" name="cardNumber" type="text" placeholder="Card Number"
                        maxlength="19" />
                    <div class="error hide" id="cardNumberError"></div>
                </div>
                <div class="name-container">
                    <div class="name-container2">
                        <input style="width:16.5vw" id="cardExpiry" name="cardExpiry" class="form-control" type="text"
                            placeholder="MM/YY" />
                        <div class="error hide" id="cardExpiryError"></div>
                    </div>
                    <div class="name-container3">
                        <input style="width:16.6vw" id="cardCVV" name="cardCVV" class="form-control" type="text" maxlength="3"
                            placeholder="CVV" />
                        <div class="error hide" id="cardCVVError"></div>
                    </div>
                </div>
                <div>
                    <button class="form-control btn btn-primary" type="submit" id="submit" name="submit" value="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    <script src="signupValidation.js"></script>
</body>

</html>