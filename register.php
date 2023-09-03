<?php require_once(__DIR__ . "/config/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>KIDS CASTLE</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
    <div class="register-wrapper">
        <div class="form">
            <form action="<?php echo BASEURL ?>/process/register_process.php" method="POST" id="reg_form">
                <div>
                    <div class="form-group">
                        <label for="fname"><b>First Name :</b></label>
                        <input class="form-element" type="text" id="fname" name="firstname" placeholder="Your name.." autocomplete="off" required>
                        <small style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="lname"><b>Last Name :</b></label>
                        <input class="form-element" type="text" id="lname" name="lastname" placeholder="Your last name.." autocomplete="off" required>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="email"><b>Email :</b></label>
                        <input class="form-element" type="text" id="email" name="email" placeholder="Your valide email.." autocomplete="off">
                        <small style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="birthday"><b>Birthday :</b></label>
                        <input class="form-element" type="date" id="birthday" name="birthday" required>

                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="password"><b>Password :</b> </label>
                        <input class="form-element" type="password" id="password" name="password" placeholder="Enter your password.." autocomplete="off">
                        <small style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="password_repeat"><b>Repeat Password :</b></label>
                        <input class="form-element" type="password" placeholder="Confirm  Password" name="password_repeat" id="password_repeat" autocomplete="off">
                        <small style="color:red;"></small>
                    </div>
                </div>
                <div>
                    <div class="form-group" id="radio">
                        <label for="male"><b>Male :</b></label>
                        <input class="form-radio" type="radio" name="gender" id="male" value="M" checked>
                        <label for="male"><b>Female :</b></label>
                        <input class="form-radio" type="radio" name="gender" id="female" value="F">
                    </div>
                </div>
                <div>
                    <div class="form-group" class="textarea">
                        <label for="description"><b>Description :</b></label><br>
                        <textarea class="form-element" name="description" rows="6" cols="50" required></textarea>

                    </div>
                </div>
                <div class="w-100 p-1">
                    <input type="button" class="submit_btn float-right" id="submit_btn" value="Submit">
                </div>

            </form>
        </div>
    </div>
    <script src="<?php echo BASEURL ?>/assets/js/validation.js"></script>
    <script>
        let submit_btn = document.querySelector("#submit_btn");
        submit_btn.addEventListener('click', function(e) {
            // prevent the form from submitting
            e.preventDefault();

            // validate fields
            let isfnameValid = checkName("#fname"),
                isEmailValid = checkEmail(),
                isPasswordValid = checkPassword(),
                ispassword_repeatValid = checkpassword_repeat();

            let isFormValid = isfnameValid &&
                isEmailValid &&
                isPasswordValid &&
                ispassword_repeatValid;

            // submit to the server if the form is valid
            console.log(isFormValid);
            if (isFormValid) {
                form.submit()
            } else {
                return false;
            }
        }, true);


        const form = document.querySelector('#reg_form');
        form.addEventListener('input', debounce(function(e) {
            switch (e.target.id) {
                case 'fname':
                    checkfname();
                    break;
                case 'email':
                    checkEmail();
                    break;
                case 'password':
                    checkPassword();
                    break;
                case 'password_repeat':
                    checkpassword_repeat();
                    break;
            }
        }));
    </script>
</body>

</html>