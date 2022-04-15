<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Register</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js "></script>
</head>

<body>
    <!-- Header -->
    <section id="header">
        <div class="header containerr">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><span>F </span>& <span>J</span> Architects</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="index.html" data-after="Home">Home</a></li>
                        <li><a href="index.html" data-after="About">About</a></li>
                        <li><a href="projects.html" data-after="Projects">Projects</a></li>
                        <li><a href="login.php" data-after="Login">Login/Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!--Login form starts here-->
    <div class="container">
        <form action="validation.php" class="form" id="login" method="POST">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error">
            <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
            <?php }?>
            </div>
            <div class="form__input-group">
                <input name="username" type="text" class="form__input" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input name="password" type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="login-button">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="registrations/register.php" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <form action="registration.php" class="form form--hidden" id="createAccount" method="POST">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error">
            <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
            <?php }?>
            </div>
            <div class="form__input-group">
                <input type="text" name="username" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" name="email" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="password" class=" form__input " autofocus placeholder="Password ">
                <div class="form__input-error-message "></div>
            </div>
            <div class="form__input-group ">
                <input type="password " name="confirm_pass" class="form__input " autofocus placeholder="Confirm password ">
                <div class="form__input-error-message "></div>
            </div>
            <button class="form__button " type="submit " name="register-button">Continue</button>
            <p class="form__text ">
                <a class="form__link " id="linkLogin ">Already have an account? Sign in</a>
            </p>
        </form>
        <!--login form ends here-->
    </div>

</body>


</html>