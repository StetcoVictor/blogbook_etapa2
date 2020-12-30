<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogbook</title>
    <script src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div id="login_left_panel">
        <img src="assets/logo_wide.png" id="login_logo">
        <div>
            <h4 class="form_title">Register</h4>
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <input type="password" placeholder="Confirm password">
            <p id="change_form_p">Already have an account? <a href="login">Login</a>.</p>
        </div>
        <p>© Copyright Blogbook 2020</p>
    </div>
    <div id="login_right_panel"></div>

    <script>
        function randomInt(min, max) {
            return min + Math.floor((max - min) * Math.random());
        }
        function getBgImg(){
            document.getElementById("login_right_panel").style.backgroundImage = "url('assets/LoginBg/"+randomInt(1, 9)+".jpg')";
        }
        getBgImg();
    </script>
</body>
</html>