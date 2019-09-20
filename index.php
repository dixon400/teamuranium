<!DOCTYPE html>
<html>
<head>
    <title> Signup Form With Social Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-index.css">

</head>
<body>
    <div class="wrap">
        <h2> Sign Up With</h2>
        <div class="social-media">
            <button><a href="#"><i class="fa fa-facebook"></i> Facebook</a></button>
            <button><a href="#"><i class="fa fa-google"></i> Google</a></button>
            <button><a href="#"><i class="fa fa-twitter"></i> Twitter</a></button>
        </div>
        <form class="signup_form" name="form" action="welcome.html" method="post" onsubmit="return validated()">
            <label> Username or Email:</label><br>
            <input autocomplete="off" type="text" name="email">
            <div id="email_error">Please fill in your correct email or username</div>
            <label> Password:</label><br>
            <input type="password" name="password">
            <div id="password_error">Please fill in your correct password. Must be more than 6 characters</div>
            <label> Re-type Password:</label><br>
            <input type="password" name="retypepassword">
            <div id="retype_password_error">Please fill in your correct password. Must be more than 6 characters</div>
            <input type="submit" value="Sign Up">
        </form>
        <p> Already a Member?<a href="uranium-login.html">Login Now</a></p>
    </div>
    <script src="js/valid-index.js"></script>
</body>
</html>