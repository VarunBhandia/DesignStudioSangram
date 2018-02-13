<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sangram</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
  </style>
</head>
<body>
             <?php include("navbar.php"); ?>

<video autoplay muted loop class="myVideo">
  <source src="img/animated.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="right">
                    29th - 31st March<br>
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
            <div class="col-xs-3" style="padding: 30px;">
            <p id="days" style=" width: 46px;
  height: 27px;
  mix-blend-mode: undefined;
  font-family: Montserrat;
  font-size: 38px;
  font-weight: 600;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.05;
  letter-spacing: 1.1px;
  text-align: right;
                                color: #252525;"></p><br>
            <p style = "mix-blend-mode: undefined;
                        
  font-family: Montserrat;
  
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 2;
  letter-spacing: 0.6px;
  
                        
  color: #ababab;">Days</p>
                
            </div>
                </center>
             <center>
            <div class="col-xs-3" style="padding: 30px;">
            <p id="hours" style=" width: 46px;
  height: 27px;
  mix-blend-mode: undefined;
  font-family: Montserrat;
  font-size: 38px;
  font-weight: 600;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.05;
  letter-spacing: 1.1px;
  text-align: right;
                                color: #252525;"></p><br>
            <p style = "mix-blend-mode: undefined;
                        
  font-family: Montserrat;
  
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 2;
  letter-spacing: 0.6px;
  
                        
  color: #ababab;">Hours</p>
            </div>
            </center>
            <center>
            <div class="col-xs-3" style="padding: 30px;">
            <p id="min" style=" width: 46px;
  height: 27px;
  mix-blend-mode: undefined;
  font-family: Montserrat;
  font-size: 38px;
  font-weight: 600;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.05;
  letter-spacing: 1.1px;
  text-align: right;
                                color: #252525;"></p><br>
            <p style = "mix-blend-mode: undefined;
                        
  font-family: Montserrat;
  
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 2;
  letter-spacing: 0.6px;
  
                        
  color: #ababab;">Minutes</p>
            </div>
                </center>
            <center>
            <div class="col-xs-3" style="padding: 30px;">
            <p id="sec" style=" width: 46px;
  height: 27px;
  mix-blend-mode: undefined;
  font-family: Montserrat;
  font-size: 38px;
  font-weight: 600;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.05;
  letter-spacing: 1.1px;
  text-align: right;
                                color: #252525;"></p><br>
            <p style = "mix-blend-mode: undefined;
                        
  font-family: Montserrat;
  
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 2;
  letter-spacing: 0.6px;
  
                        
  color: #ababab;">Seconds</p>
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
                    Our IIT Roorkee teams, along with the alumni teams participate in each sport to exibit their sports skill. Sangram is devoted in creating a customized and unforgettable experience for each and every visitor, simultaneously providing unique oppurtunities to the youth for showcasing their talents in front of extremely large and enthusiastic audience and top notch judges with a behemoth footfall of more than 1500 students, comprising several IITs and NITs. An assortment of intriguing events held in venues across our campus, are something to cater to all tastes. Plethoras of events are hosted, accompanied by informal events like sports quiz , marathon becoming the abode of this ambrosial combination.
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
