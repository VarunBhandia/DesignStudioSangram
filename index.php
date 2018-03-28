<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sangram | 2018</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,900" rel="stylesheet">
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
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/events.css">
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
                            <li class="leftlogo"><a href="index.php"><img src="img/logo.png" alt="Sangram'18 Logo" class="logo"> </a></li>
                            <li class="leftlogo"><a href="#"><img src="img/iitr_logo.png" alt="Sangram'18 Logo" class="iitr_logo"> </a></li>
                        </ul>
                                </div>
                        <div class="collapse1 navbar-collapse1" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class=""><a href="index.php#about" class="navbar_link_index nav-items">ABOUT US</a></li>
                                <li class=""><a href="events.php" class="navbar_link_index nav-items">EVENTS</a></li>
                                <li class=""><a href="sponsors.php" class="navbar_link_index nav-items">SPONSORS</a></li>
                                <li class=""><a href="team.php" class="navbar_link_index nav-items">TEAM</a></li>
<!--                                <li class=""><a href="liveScores.php" class="navbar_link_index nav-items">LIVE SCORE</a></li>-->
                                <li class=""><a href="index.php#footer_index" class="padding14 navbar_link_index nav-items">CONTACT US</a></li>
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
<!--
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                    <div class="register">
            <center>
                <p class="register_text">
                            <a href="../liveScores.php" target="_blank">
                                LIVE SCORE</a></p>
            </center>
                        
    </div>

            </div>
            <div class="col-md-2"></div>
        </div>
-->
        <div class="row">
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
    </div>
<div>
        <div class="col-md-2"></div>

        </div>
    <div class="about" id="about">
        <div class="row">
            <div class="col-md-5 col-xs-8 ">
                <img src="img/group-25-new.jpg" class="aboutimage">
            </div>
            <div class="col-md-7 col-xs-12">
                <div class="row">
                    <div class="col-md-8 col-xs-12 aboutheader">
                    <b>ABOUT US</b></div>
                    <div class="col-md-4 col-xs-12 rectabout"></div>
                </div>
                <div class="grey"></div>

                    <div class="aboutcontent">
                        Sangram boasts of being a one of a kind festival hosted by IIT Roorkee and is a four day sports extravaganza. It brings out the sporting spirit of the brilliant minds of the country and provides an ideal platform for all the sports enthusiasts to compete with each other.
                      Our IIT Roorkee teams, along with the alumni teams participate in each sport to exhibit their sports skill. Sangram is devoted in creating a customized and unforgettable experience for each and every visitor, simultaneously providing unique opportunities to the youth for showcasing their talents in front of extremely large and enthusiastic audience and top notch judges with a behemoth footfall of more than 1500 students, comprising several IITs and NITs. An assortment of intriguing events held in venues across our campus, is something to cater to all tastes. Plethoras of events are hosted, accompanied by informal events like sports quiz , marathon becoming the abode of this ambrosial combination.
                      Sangram’18 promises to be an exhilarating experience from beginning to end.
                  </div>

            </div>
            <div>
        </div>
    </div>
</div>
        <p class="trailorheader">SANGRAM 2K18 | TRAILER</p>
        <center>
<iframe width="75%" height="700" src="https://www.youtube.com/embed/HqiB6Vl-T-k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="desktop"></iframe>
            <iframe width="90%" height="200" src="https://www.youtube.com/embed/HqiB6Vl-T-k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="mobile"></iframe>
        </center>
       <div class="container-fluid">
           <p class="participants1">PARTICIPANTS ACROSS INDIA</p>
        <div class="col-md-12 col-xs-12">
            

        </div>

    </div>
        <center>
    <div id="map" class="map1">
        </div>
        </center>
   
     <script>

      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
          var india = {lat:24.92629    , lng: 78.44238};
          var iitd = { lat:28.54498 , lng:77.19262 };
          var iitk = { lat:26.51232 , lng:80.23285 };
          var iitkgp ={ lat:22.31458 , lng: 87.3089};
          var mitindore = { lat:22.75825 , lng: 75.93828};
          
           var pilani = { lat:28.36402  , lng: 75.58692};
           var kurukshetra = { lat:29.94896  , lng: 76.81727};
           var dtu = { lat:28.75003  , lng: 77.11765};
           var ymca = { lat:28.36719  , lng: 77.31566};
           var jalandharNit = { lat:31.39611  , lng: 75.53535};
           var IITjodhpur = { lat:26.47235  , lng: 73.11451};
           var IITmandi = { lat:31.77539  , lng: 76.98607};
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: india
        });

        var desc_iitd = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">IIT Delhi</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants" id="participants">Participants: 120+ </p>'+
            
            '</div>'+
            '</div>';
          
      var desc_iitk = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">IIT Kanpur</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 60+ </p>'+
            
            '</div>'+
            '</div>';
      var desc_iitkgp = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">IIT Kharagpur</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 45+ </p>'+
            
            '</div>'+
            '</div>';
      var desc_mitindore = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">MIT Indore</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 25+ </p>'+
            
            '</div>'+
            '</div>';
          
          
          
           var desc_pilani = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">BITS Pilani</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 180+ </p>'+
            
            '</div>'+
            '</div>';
          
           var desc_kurukshetra = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">NIT Kurukshetra</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 120+ </p>'+
            
            '</div>'+
            '</div>';
          
           var desc_dtu = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">DTU</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 130+ </p>'+
            
            '</div>'+
            '</div>';
          
           var desc_ymca = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">YMCA</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 30+ </p>'+
            
            '</div>'+
            '</div>';
          
           var desc_jalandhar = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">NIT Jalandhar</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 35+ </p>'+
            
            '</div>'+
            '</div>';
          
           var desc_jodhpur = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="">IIT Jodhpur</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 90+ </p>'+
            
            '</div>'+
            '</div>';
          
           var desc_mandi = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">IIT Mandi</h1>'+
            
            '<div id="bodyContent">'+
            '<p class="participants">Participants: 45+ </p>'+
            
            '</div>'+
            '</div>';

        var info1 = new google.maps.InfoWindow({
          content: desc_iitd
        });

        var marker1 = new google.maps.Marker({
          position: iitd,
          map: map,
          title: 'IIT Delhi'
        });
        marker1.addListener('mouseover', function() {
          info1.open(map, marker1);
        });
          
           marker1.addListener('mouseout', function() {
          info1.close(map, marker1);
        });
          
          
          
          
          
          var info2 = new google.maps.InfoWindow({
          content: desc_iitk
        });

        var marker2 = new google.maps.Marker({
          position: iitk,
          map: map,
          title: 'IIT Kanpur'
        });
        marker2.addListener('mouseover', function() {
          info2.open(map, marker2);
        });
           marker2.addListener('mouseout', function() {
          info2.close(map, marker2);
        });
          
          
          
          
          
          
          var info3 = new google.maps.InfoWindow({
          content: desc_iitkgp
        });

        var marker3 = new google.maps.Marker({
          position: iitkgp,
          map: map,
          title: 'IIT Kharagpur'
        });
        marker3.addListener('mouseover', function() {
          info3.open(map, marker3);
        });
          
           marker3.addListener('mouseout', function() {
          info3.close(map, marker3);
        });
       //////////////////////////////////////////////////////////////////
          
          var info4 = new google.maps.InfoWindow({
          content: desc_mitindore
        });

        var marker4 = new google.maps.Marker({
          position: mitindore,
          map: map,
//          title: 'MIT Indore'
        });
        marker4.addListener('mouseover', function() {
          info4.open(map, marker4);
        });
          
           marker4.addListener('mouseout', function() {
          info4.close(map, marker4);
        });
        /////////////////////////////////////////////////////////////////  
          
           var info5 = new google.maps.InfoWindow({
          content: desc_pilani
        });

        var marker5 = new google.maps.Marker({
          position: pilani,
          map: map,
//          title: 'MIT Indore'
        });
        marker5.addListener('mouseover', function() {
          info5.open(map, marker5);
        });
          
           marker5.addListener('mouseout', function() {
          info5.close(map, marker5);
        });
          
          ///////////////////////////////////////////////////////////////
           var info6 = new google.maps.InfoWindow({
          content: desc_kurukshetra
        });

        var marker6 = new google.maps.Marker({
          position: kurukshetra,
          map: map,
//          title: 'MIT Indore'
        });
        marker6.addListener('mouseover', function() {
          info6.open(map, marker6);
        });
          
           marker6.addListener('mouseout', function() {
          info6.close(map, marker6);
        });
        //////////////////////////////////////////////////////////////////////  
           var info7 = new google.maps.InfoWindow({
          content: desc_dtu
        });

        var marker7 = new google.maps.Marker({
          position: dtu,
          map: map,
//          title: 'MIT Indore'
        });
        marker7.addListener('mouseover', function() {
          info7.open(map, marker7);
        });
          
           marker7.addListener('mouseout', function() {
          info7.close(map, marker7);
        });
        ///////////////////////////////////////////////////////////////////////  
           var info8 = new google.maps.InfoWindow({
          content: desc_ymca
        });

        var marker8 = new google.maps.Marker({
          position: ymca,
          map: map,
//          title: 'MIT Indore'
        });
        marker8.addListener('mouseover', function() {
          info8.open(map, marker8);
        });
          
           marker8.addListener('mouseout', function() {
          info8.close(map, marker8);
        });
        ////////////////////////////////////////////////////////////////////  
           var info9 = new google.maps.InfoWindow({
          content: desc_jalandhar
        });

        var marker9 = new google.maps.Marker({
          position: jalandharNit,
          map: map,
//          title: 'MIT Indore'
        });
        marker9.addListener('mouseover', function() {
          info9.open(map, marker9);
        });
          
           marker9.addListener('mouseout', function() {
          info9.close(map, marker9);
        });
        ///////////////////////////////////////////////////////////////////  
           var info11 = new google.maps.InfoWindow({
          content: desc_jodhpur
        });

        var marker11 = new google.maps.Marker({
          position: IITjodhpur,
          map: map,
//          title: 'MIT Indore'
        });
        marker11.addListener('mouseover', function() {
          info11.open(map, marker11);
        });
          
           marker11.addListener('mouseout', function() {
          info11.close(map, marker11);
        });
        ////////////////////////////////////////////////////////////////////  
           var info10 = new google.maps.InfoWindow({
          content: desc_mandi
        });

        var marker10 = new google.maps.Marker({
          position: IITmandi,
          map: map,
//          title: 'MIT Indore'
        });
        marker10.addListener('mouseover', function() {
          info10.open(map, marker10);
        });
          
           marker10.addListener('mouseout', function() {
          info10.close(map, marker10);
        });
          
          
     /////////////////////////////////////////////////////////////////////
          
          
         
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5dzfrK39AYwDeI-WHMCeG2it8lTUllmk&callback=initMap">
    </script>
    <div id="footer_index">
    <?php include("footer.php"); ?>
         </div>
    </div>
</body>
</html>
