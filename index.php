<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sangram | 2019</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,900" rel="stylesheet">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sangram boasts of being a one of a kind festival hosted by IIT Roorkee and is a four day sports extravaganza. It brings out the sporting spirit of the brilliant minds of the country and provides an ideal platform for all the sports enthusiasts to compete with each other.">
        <meta name="keywords" content="sports, sports fest, engineering, study, fest, engineers, technical, iit ,iit roorkee ,roorkee ,uttrakhand ,Varun Bhandia ,sangram19 ,sangramiitr.in">
        <meta name="author" content="Varun Bhandia">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/hover.css">
        <!-- <link rel="stylesheet" href="css/events.css"> -->
        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links
                $("nav a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 1000, function(){

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script>


    </head>
    <body >
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <nav class="navbar-fixed-top index">
                    <div class="gradient-background_index"></div>

                    <div class="container-fluid">
                        <div class="navbar-header" style="margin-top: 1em;">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar" style="background-color:white;"></span>
                                <span class="icon-bar" style="background-color:white;"></span>
                                <span class="icon-bar" style="background-color:white;"></span>                        
                            </button>
                            <ul class="nav navbar-nav">
                                <li class="leftlogo"><a href="index.php"><img src="img/logo.png" alt="Sangram'19 Logo" class="logo"> </a></li>
                                <li class="leftlogo"><a href="index.php"><img src="img/iitr_logo.png" alt="Sangram'19 Logo" class="iitr_logo"> </a></li>
                            </ul>
                        </div>
                        <div class="collapse1 navbar-collapse1" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class=""><a href="about_us.php" class="navbar_link_index nav-items">ABOUT US</a></li>
                                <li class=""><a href="events.php" class="navbar_link_index nav-items">EVENTS</a></li>
                                <li class=""><a href="sponsors.php" class="navbar_link_index nav-items">SPONSORS</a></li>
                                <li class=""><a href="team.php" class="navbar_link_index nav-items">TEAM</a></li>
                                <li class=""><a href="contact_us.php" class="padding14 navbar_link nav-items">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-1"></div>
        </div>
        <script>
            var isVisible = false;
            $('#mybutton').click(function(){
                $(window).scrollTop(0);
            });
            $(window).scroll(function(){
                var shouldBeVisible = $(window).scrollTop()>200;
                if (shouldBeVisible && !isVisible) {
                    isVisible = true;
                    $('.gradient-background_index').show();
                } else if (isVisible && !shouldBeVisible) {
                    isVisible = false;
                    $('.gradient-background_index').hide();
                }
            });</script>

        <video autoplay muted loop class="myVideo">
            <source src="img/animated.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="register">
                    <center>
                        <p class="register_text">
                            <a href="https://goo.gl/forms/GlDYuwNNPMNImlIS2" target="_blank">
                                REGISTRATION</a></p>
                    </center>

                </div>

            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="right">
                    1st March - 3rd March <br>
                    Annual Sports Fest IIT Roorkee
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div>
            <div class="col-md-2"></div>

        </div>
        <div id="footer_index">
            <?php include("footer.php"); ?>
        </div>
        </div>
    </body>
</html>
