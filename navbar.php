    <link rel="stylesheet" href="css/style.css">
        <div class="row ">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <nav class="navbar-fixed-top gradient">
                    <div class="gradient-background"></div>

                    <div class="container-fluid">
                        <div class="navbar-header" style="margin-top: 2em;">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar" style="background-color:white;"></span>
                            <span class="icon-bar" style="background-color:white;"></span>
                            <span class="icon-bar" style="background-color:white;"></span>                        
                          </button>
                          <a href="index.php"><img src="img/logo.png" alt="Sangram'18 Logo" class="logo"> </a><a href="#"><img src="img/iitr_logo.png" alt="Sangram'18 Logo" class="iitr_logo"> </a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-items"><a href="index.php#about" class="navbar_link">About Us</a></li>
                                <li class="nav-items"><a href="events.php" class="navbar_link">Events</a></li>
                                <li class="nav-items"><a href="sponsors.php" class="navbar_link">Sponsors</a></li>
                                <li class="nav-items"><a href="team.php" class="navbar_link">Team</a></li>
                                <li class="nav-items"><a href="index.php#footer_index" class="navbar_link">Contact Us</a></li>
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