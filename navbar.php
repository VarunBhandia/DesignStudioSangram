    <link rel="stylesheet" href="css/style.css">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <nav class="navbar-fixed-top gradient">
                    <div class="gradient-background"></div>

                    <div class="container-fluid">
                        <div class="navbar-header" style="margin-top: 1em;">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar" style="background-color:black;"></span>
                            <span class="icon-bar" style="background-color:black;"></span>
                            <span class="icon-bar" style="background-color:black;"></span>                        
                          </button>
                            <ul class="nav navbar-nav">
                            <li class="leftlogo"><a href="index.php"><img src="img/vector-smart-object-5.png" alt="Sangram'19 Logo" class="logo"> </a></li>
                            <li class="leftlogo"><a href="#"><img src="img/untitled-1-copy-2.png" alt="Sangram'19 Logo" class="iitr_logo"> </a></li>
                        </ul>
                                </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class=""><a href="index.php#about" class="navbar_link nav-items">ABOUT US</a></li>
                                <li class=""><a href="events.php" class="navbar_link nav-items">EVENTS</a></li>
                                <li class=""><a href="sponsors.php" class="navbar_link nav-items">SPONSORS</a></li>
                                <li class=""><a href="team.php" class="navbar_link nav-items">TEAM</a></li>
                                <li class=""><a href="liveScores.php" class="navbar_link nav-items">LIVE SCORE</a></li>
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
