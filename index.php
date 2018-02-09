<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sangram</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
  </style>
</head>
<body>
    <div class="gradient">
             <?php include("navbar.php"); ?>
        <div class="row">
            <div class="col-md-12">
                <img src="img/Untitled-1.png" alt="Sangram'18" class="running">
            </div>

        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="right">
                    29th - 31st March<br>
                    Annual Sports Fest IIT Roorkee
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <div class="timer_div">
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
    document.getElementById("timer").innerHTML =days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
</div>
        </div>
        <div class="col-md-3"></div>
    
        </div>
    <div class="about">
        <div class="row">
            <div class="col-md-5">
                <img src="img/group-25.jpg" class="aboutimage">
            </div>
            <div class="col-md-7">
                <div class="row ">
                    <div class="col-md-8 aboutheader">
                    <b>ABOUT US</b></div>
                    <div class="col-md-4 rectabout"></div>
                </div>
                <div class="grey"></div>

                    <p class="aboutcontent">Sangram boasts of being a one of a kind festival hosted by IIT Roorkee and is a three day sports extravaganza. It brings out the sporting spirit of the brilliant minds of the country and provides an ideal platform for all the sports enthusiasts to compete with each other.
                    Our IIT Roorkee teams, along with the alumni teams participate in each sport to exibit their sports skill. Sangram is devoted in creating a customized and unforgettable experience for each and every visitor, simultaneously providing unique oppurtunities to the youth for showcasing their talents in front of extremely large and enthusiastic audience and top notch judges with a behemoth footfall of more than 1500 students, comprising several IITs and NITs. An assortment of intriguing events held in venues across our campus, are something to cater to all tastes. Plethoras of events are hosted, accompanied by informal events like sports quiz , marathon becoming the abode of this ambrosial combination.
                    Sangram’18 promises to be an exhilarating experience from beginning to end.</p>

            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

</body>
</html>
