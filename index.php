<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sangram | 2018</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sangram boasts of being a one of a kind festival hosted by IIT Roorkee and is a four day sports extravaganza. It brings out the sporting spirit of the brilliant minds of the country and provides an ideal platform for all the sports enthusiasts to compete with each other.">
    <meta name="keywords" content="sports, sports fest, engineering, study, fest, engineers, technical, iit ,iit roorkee ,roorkee ,uttrakhand ,Varun Bhandia ,sangram18 ,sangramiitr.in">
    <meta name="author" content="Varun Bhandia">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
  </style>
</head>
<body>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <nav class="navbar-fixed-top">
                    <div class="gradient-background"></div>

                    <div class="container-fluid">
                        <div class="navbar-header" style="margin-top: 1em;">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar" style="background-color:white;"></span>
                            <span class="icon-bar" style="background-color:white;"></span>
                            <span class="icon-bar" style="background-color:white;"></span>                        
                          </button>
                            <ul class="nav navbar-nav">
                            <li class="leftlogo"><a href="index.php"><img src="img/logo.png" alt="Sangram'18 Logo" class="logo"> </a></li>
                            <li class="leftlogo"><a href="#"><img src="img/iitr_logo.png" alt="Sangram'18 Logo" class="iitr_logo"> </a></li>
                        </ul>
                                </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class=""><a href="index.php#about" class="navbar_link nav-items">ABOUT US</a></li>
                                <li class=""><a href="events.php" class="navbar_link nav-items">EVENTS</a></li>
                                <li class=""><a href="sponsors.php" class="navbar_link nav-items">SPONSORS</a></li>
                                <li class=""><a href="team.php" class="navbar_link nav-items">TEAM</a></li>
                                <li class=""><a href="index.php#footer_index" class="padding14 navbar_link nav-items">CONTACT US</a></li>
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
          $('.gradient-background').show();
     } else if (isVisible && !shouldBeVisible) {
          isVisible = false;
          $('.gradient-background').hide();
    }
});</script>
<video autoplay muted loop class="myVideo">
  <source src="img/animated.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="right">
                    29th March - 1st April<br>
                    Annual Sports Fest IIT Roorkee
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    <div class="row" >
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <div class="timer_div ">
            <center>
            <div class="col-xs-3">
            <p id="days" class="timer_days"></p><br>
            <p class="timer_days_content">Days</p>
                
            </div>
                </center>
             <center>
            <div class="col-xs-3">
            <p id="hours" class="timer_days"></p><br>
            <p class="timer_days_content">Hours</p>
            </div>
            </center>
            <center>
            <div class="col-xs-3">
            <p id="min"class="timer_days"></p><br>
            <p class="timer_days_content">Minutes</p>
            </div>
                </center>
            <center>
            <div class="col-xs-3">
            <p id="sec" class="timer_days"></p><br>
            <p class="timer_days_content">Seconds</p>
            </div>
            </center>
    <p id="timer"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("March 29, 2018 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("days").innerHTML =days ;
     document.getElementById("hours").innerHTML =hours ;
     document.getElementById("min").innerHTML =minutes ;
     document.getElementById("sec").innerHTML =seconds ;
//    + "d " + hours + "h "
//    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
</div>
        </div>
<div>
        <div class="col-md-2"></div>
    
        </div>
     hhh    
         
        
<!--
<div class="row">
             <div class="col-md-4"></div>
      <div class="col-md-4" style="background-color: #3f76e3;            width: 264px;
  height: 72px;
  
  box-shadow: 2.1px 7.7px 16.6px 4.4px rgba(63, 63, 63, 0.1);
            width: 160px;" id="myContainer">
        
          <p  class="registerButton" data-target="#registerModal" data-toggle="modal">REGISTER</p>
      </div>
            
             <div class="col-md-4"></div>
            </div>
-->

    
<!--
      <form method="post" id="registerform">
        <div class="modal" id="registerModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                   Register:
                  </h4>
              </div>
              <div class="modal-body">
                  
                  Login message from PHP file
                  <div id="registermessage"></div>
                  

                  <div class="form-group">
                      <label for="name" class="sr-only">Name:</label>
                      <input class="form-control" type="email" name="name" id="name" placeholder="Name" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="email" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Email" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="phone" class="sr-only">Phone Number:</label>
                      <input class="form-control" type="password" name="phone" id="phone" placeholder="Phone Number" maxlength="50">
                  </div>
                   <div class="form-group">
                      <label for="collage" class="sr-only">Collage:</label>
                      <input class="form-control" type="password" name="collage" id="collage" placeholder="Collage" maxlength="100">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="login" type="submit" value="Login">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                  Register
                </button>  
              </div>
          </div>
      </div>
      </div>
      </form>
-->

        
        
    <div class="about" id="about">
        <div class="row">
            <div class="col-md-5">
                <img src="img/group-25-new.jpg" class="aboutimage">
            </div>
            <div class="col-md-7">
                <div class="row ">
                    <div class="col-md-8 aboutheader">
                    <b>ABOUT US</b></div>
                    <div class="col-md-4 rectabout"></div>
                </div>
                <div class="grey"></div>

                    <p class="aboutcontent">Sangram boasts of being a one of a kind festival hosted by IIT Roorkee and is a four day sports extravaganza. It brings out the sporting spirit of the brilliant minds of the country and provides an ideal platform for all the sports enthusiasts to compete with each other.
                    Our IIT Roorkee teams, along with the alumni teams participate in each sport to exibit their sports skill. Sangram is devoted in creating a customized and unforgettable experience for each and every visitor, simultaneously providing unique opportunities to the youth for showcasing their talents in front of extremely large and enthusiastic audience and top notch judges with a behemoth footfall of more than 1500 students, comprising several IITs and NITs. An assortment of intriguing events held in venues across our campus, are something to cater to all tastes. Plethoras of events are hosted, accompanied by informal events like sports quiz , marathon becoming the abode of this ambrosial combination.
                    Sangram’18 promises to be an exhilarating experience from beginning to end.</p>

            </div>
        </div>
    </div>
</div>
    <div id="footer_index">
    <?php include("footer.php"); ?>
         </div>

</body>
</html>
