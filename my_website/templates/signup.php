<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="..\css\signup_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script>
        $(function () {
            $("#header").load("header.php");
            $("#footer").load("footer.html");
            $("#ads").load("sidebarads.html");
        });

    var check = function() {
        if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
            document.getElementById('message').style.display = "none";
            document.getElementById('signup_btn').disabled = false;
          
        } else {
        //   document.getElementById('message').style.backgroundColor = 'rgba(255, 0, 0, 0.555)';
          document.getElementById('message').innerHTML = 'Password not Maching';
          document.getElementById('message').style.display = " block";
          document.getElementById('signup_btn').disabled = true;
        }
      }
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
                    elseif($_GET["error"]=="invaliduid"){
                        echo "<span id='message'>Username Invalid!</span>";
                    }
                    elseif($_GET["error"]=="invalidemail"){
                        echo "<span id='message'>Invalid Email!</span>";
                    }
                    elseif($_GET["error"]=="passwordsdontmatch"){
                        echo "<span id='message'>Passwords dosn't Match!</span>";
                    }
                    elseif($_GET["error"]=="usernameoremailexist"){
                        echo "<span id='message'>User Already Exist!</span>";
                    }
                    
                }
                ?>
            </div>
            
            <div class="signup_box">
                <h3>Sign Up</h3>
                <form class="signup_form" action="../includes/signup_inc.php" method="post" enctype="multipart/form-data">
                    <ul>
                        <input type="text" class="firstname" placeholder=" First Name..." name="firstname" required>
                        <input type="text" class="lastname" placeholder=" Last Name..." name="lastname">
                    </ul>
                    <input type="text" class="username" placeholder=" Username..." name="username" required>
                    <input type="email" class="email" placeholder="Email..." name="email" required>

                    <input type="password" id="password" class="password" placeholder=" Password..." name="password" onkeyup='check();' required>
                    <input type="password" id="confirm_password" class="confirm_password" placeholder="Confirm Password..." name="rpt_password" onkeyup='check();'
                        required>

                    <button type="submit" id="signup_btn" class="signup_btn" name="submit_signup">Signup</button>
                    <span class="login_text">Already a user <a href="login.html">Login</a></span>
                </form>
                <ul class="buttons">
                    <button type="submit" class="google_signup_btn">Signup With </br> Google</button>
                    <button type="submit" class="fb_signup_btn">Signup With </br> Facebook</button>
                </ul>
            </div>
            <div id="footer" class="footer">
                <?php include('footer.php'); ?>
            </div>
        </div>

    </container>
</body>

</html>