<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Sign Up</title>
</head>

<body>
    <main id="sign-up">
        <div class="sign-up__column">

            <!--  -->
            <div class="sign-up__box">
                <img src="images/loginLogo.png" class="sign-up__logo" />
                <h2>Sign up to see photos and videos from your friends.</h2>
                <button>Log in with Facebook</button>
                <span class="sign-up__divider">or</span>
                <form action="#" method="POST" enctype="multipart/form-data" class="sign-up__form" autocomplete="on">
                    <div class="error"></div>
                    <input type="text" name="email" placeholder="Email" required autocomplete="off" />
                    <input type="text" name="fullname" placeholder="Full name" required autocomplete="off">
                    <input type="text" name="username" placeholder="User name" required autocomplete="off">
                    <input type="password" name="password" placeholder="Password" required autocomplete="off" />
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    <div class="button__signup"><input type="submit" name="submit" value="Sign up"></div>
                </form>
                <p>By signing up, you agree to our Terms , Data Policy and Cookies Policy .</p>
            </div>
            <!--  -->

            <!--  -->
            <div class="sign-up__box">
                <span>Have an account?</span> <a href="./login.php">Log in</a>
            </div>
            <!--  -->

            <div class="sign-up__box--transparent">
                <span>Get the app.</span>
                <div class="sign-up__appstores">
                    <img src="images/ios.png" class="sign-up__appstore" alt="Apple appstore logo" title="Apple appstore logo" />
                    <img src="images/android.png" class="sign-up__appstore" alt="Android appstore logo" title="Android appstore logo" />
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2021 Instagram from Meta</span>
        </div>
    </footer>

    <script src="JS/signup.js"></script>

</body>

</html>