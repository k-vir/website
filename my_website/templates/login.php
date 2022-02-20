<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="..\css\login_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script>
        $(function () {
            $("#header").load("header.php");
            $("#footer").load("footer.html");
            $("#ads").load("sidebarads.html");
        });
    </script>
</head>

<body>
    <container>
        <div class="grid">
            <div id="header" class="header">
                <!-- <?php include('header.php'); ?> -->
            </div>
            <div class="errors_box">
                <span id='message' hidden></span>
                <?php
                if (isset($_GET["error"])){
                    if($_GET["error"]=="emptyinput"){
                        echo "<span id='message'>All feilds are maindatory!</span>";
                    }
                    elseif($_GET["error"]=="usernotexist"){
                        echo "<span id='message'>User Not Registered!</span>";
                    }
                    elseif($_GET["error"]=="wrongpwd"){
                        echo "<span id='message'>Please Check Password!</span>";
                    }
                }
                ?>
            </div>
            <div class="login_box">
                <h3>Login</h3>
                <form class="login_form" action="../includes/login_inc.php" method="post" enctype="multipart/form-data">
                    <input type="text" class="uid" placeholder=" Username/Email" name="uid" required>
                    <input type="password" class="password" placeholder=" Password" name="password" required>
                    <span><a href="#">Forget Password</a></span></br>
                    <button type="submit" class="submit_btn" name="submit_login">Login</button>
                    <span class="login_text">Don't have Account??? <a href="signup.html">SignUp</a></span>
                </form>
                <button type="submit" class="Google_login_btn">Login With Google</button>
                <button type="submit" class="fb_login_btn">Login With Facebook</button>
            </div>
            <div id="footer" class="footer">
                <!-- <?php include('footer.php'); ?> -->
            </div>
        </div>
    </container>
</body>

</html>