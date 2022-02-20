<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>header</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.bars').click(function(){
                $('.bars').toggleClass('active')
                $('.header_2').toggleClass('active')
            })
        })
    </script>
    <script>
        // if ($('.header_2').toggleClass!='active'){
        //     var prevScrollpos = window.pageYOffset;
        //     window.onscroll = function() {
        //     var currentScrollPos = window.pageYOffset;
        //     if (prevScrollpos < currentScrollPos) {
        //         document.getElementById("header_bars").style.visibility = "visible";   
        //     }
        //     if (currentScrollPos = 0) {
        //         document.getElementById("header_bars").style.visibility = "hidden"; 
        //     }
        //      else {
        //         document.getElementById("header_bars").style.visibility = "visible";
        //     }
        //     prevScrollpos = currentScrollPos;
        //     }
        // }
        // </script>
    <div id="header_top" class="header_top">
        <!-- bars for header -->
        <div class="bars">
            <li id="header_bars"><a class="header_bars" data-drupal-button-link="btn"><i class="fa fa-bars"></i></a></li> 
        </div>
        <!-- logo for desktop pc -->
        <div class="logo_desktop">
            <a href="index.html"><img class="logo_img" src="..\resources\My Logo Small.png" alt="logo"></img></a>
        </div>
        <div class="header_top_items">
            <ul>
                <li id="search">
                    <form role="search" method="get" class="search-form" action="#">
                        <label>
                            <!-- <span class="screen-reader-text">Search for:</span> -->
                            <input type="search" class="search-field" placeholder="Search" value="" name="s"
                                title="Search for:">
                                <li id="search"><a href="" class="search_btn" data-drupal-button-link="btn">
                                    <i class="fa fa-search"></i></a></li>
                        </label>
                        
                    </form>
                </li>


                <!-- <li id="downlaod"><a href="download.html" class="download_btn" data-drupal-button-link="btn">
                        <i class="fa fa-download"></i> Download</a></li> -->
                <li id="subscribe"><a href="../templates/subscribe.html" class="subscribe_btn" data-drupal-button-link="btn"><i class="fa fa-bell"></i> Subscribe</a></li>
                <li id="blog"><a href="../templates/blog.html" class="blog_btn" data-drupal-button-link="btn"><i class="fas fa-file-alt"></i> Blog</a></li>
                <?php
                    if (isset($_SESSION["userid"])) {
                        echo'<li id="logout"><a href="../includes/logout_inc.php" class="logout_btn" data-drupal-button-link="btn"><i class="fa fa-fw fa-user"></i> Log out</a></li>';
                    }
                    else{
                        echo'<li id="login"><a href="../templates/login.php" class="login_btn" data-drupal-button-link="btn"><i class="fa fa-fw fa-user"></i> Log in</a></li>';
                        echo'<li id="register"><a href="../templates/signup.php" class="register_btn" data-drupal-button-link="btn"><i class="fa fa-fw fa-user"></i> Sign Up</a></li>';
                    }
                ?>
            </ul>


        </div>
    </div>
    <div id="header_2" class="header_2">
        <ul class="nav">
            <div class="nav_items">
                <!-- <div class="dropdown">
                    <span><i class="fa fa-file-image-o"></i> PNG Tools</span>
                    <div class="dropdown_content">
                        <ul>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Convert from PNG</header>
                                    <li><a href="#">PNG to JPG</a></li>
                                    <li><a href="#">PNG to PDF</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Convert to PNG</header>
                                    <li><a href="#">JPG to PNG</a></li>
                                    <li><a href="#">PDF to PNG</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Edit PNG</header>
                                    <li><a href="#">Edit PNG</a></li>
                                    <li><a href="#">Crop PNG</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Other PNG Tools</header>
                                    <li><a href="#">Compress PNG</a></li>
                                    <li><a href="#">Resize PNG</a></li>
                                    <li><a href="#">Rotate PNG</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div> -->
                <div class="dropdown">
                    <span><i class="fa fa-file-image-o"></i> Image Tools</span>
                    <div class="dropdown_content">
                        <ul>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Convert form JPG</header>
                                    <li><a href="jpgtopng.php">JPG to PNG</a></li>
                                    <li><a href="#">JPG to PDF</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Convert to JPG</header>
                                    <li><a href="#">PNG to JPG</a></li>
                                    <li><a href="#">PDF to JPG</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Edit JPG</header>
                                    <li><a href="#">Edit JPG</a></li>
                                    <li><a href="#">Crop JPG</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Other JPG Tools</header>
                                    <li><a href="#">Compress JPG</a></li>
                                    <li><a href="#">Resize JPG</a></li>
                                    <li><a href="#">Rotate JPG</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                    <span><i class="fa fa-file-pdf-o"></i> PDF Tools</span>
                    <div class="dropdown_content">
                        <ul>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Convert form PDF</header>
                                    <li><a href="#">PDF to JPG</a></li>
                                    <li><a href="#">PDF to PNG</a></li>
                                    <li><a href="#">PDF to Excel</a></li>
                                    <li><a href="#">PDF to Word</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="tool_links">
                                    <header>Convert to PDF</header>
                                    <li><a href="#">JPG to PDF</a></li>
                                    <li><a href="#">PNG to PDF</a></li>
                                    <li><a href="#">Excel to PDF</a></li>
                                    <li><a href="#">Word to PDF</a></li>
                                </ul>
                            </div>

                            <div class="row">
                                <ul class="tool_links">
                                    <header>Other PDF Tools</header>
                                    <li><a href="#">Compress PDF</a></li>
                                    <li><a href="#">Merge PDF</a></li>
                                    <li><a href="#">Split PDF</a></li>
                                    <li><a href="#">Organize PDF</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </ul>
        <div class="btn_header">

        </div>
    </div>
</body>

</html>