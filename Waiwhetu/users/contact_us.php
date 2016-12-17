<?php
ob_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

?>
<?php
include('db_con.php');
include('check_session.php');
?>

<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Waiwhetu Marae</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		
		
	<script src="http://maps.googleapis.com/maps/api/js"></script>	
		
		
		
		
		
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="">News And Events</a></li>
						<li><a href="marae_booking.php">Marae Booking</a></li>
						<li><a href="contact_us.php">Contact Us</a></li>
						 <?php
                        if(!isset($_SESSION['user_role'])){
                    echo"<li><a href='login.php'>login</a></li>";
                }
                else{
                    echo "
                        
                            <li><a href='#'>Welcome " . $_SESSION['username'] ."</a></li>
                           
                            <li><a href='include/logout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
                        </ul>
                        ";
                }
               ?>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				
				
				
				

				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Waiwhetu Marae</a></h1>
					<span class="tag"></span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">
                    
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<!--<h2>Right Sidebar</h2>-->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Contact Us</h2>
							</header>
	
<!--Contact Form-->
<form id="contactForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-md-3 control-label">Topic</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="fullName" size="50"  />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Email</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="email" size="50" />
        </div>
    </div>
   
    <div class="form-group">
        <label class="col-md-3 control-label">Query</label>
        <div class="col-md-6">
            <textarea class="form-control" name="content" rows="7" cols="50" ></textarea>
        </div>
    </div>
    <!-- #messages is where the messages are placed inside -->
    <div class="form-group" size="50">
        <div class="col-md-9 col-md-offset-5" size="50" width :"50" >
            <div id="messages" ></div>

        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="button button-style1">Submit</button>
        </div>
    </div>
</form><br><br>

<!--/Contact Form-->	
				

<div id="map" style="width: 420px; height: 360px;"></div>

  <script type="text/javascript">
    var locations = [
     ['<strong>Waiwhetu Marae</strong><br> Puketapu Grove<br>Lower Hutt, New Zealand',-41.2241759,174.9198598, 1],
	
    ];
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: new google.maps.LatLng(-41.2241574,174.9184001),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>	


						
					</div>
					</header>
					
					
					</div>
</section>
					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Heritage</h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										<li><a href="#sidebar3">Marae History</a></li>
										<li><a href="#sidebar6">Nga Kaupapa Korero</a></li>	
										<li><a href="#sidebar7">Te Raukura</a></li>	</br>	
										<li><a href="#sidebar9">Tohu Kakahi & Te Whiti o Rongomai</a></li>	
										</ul>										
										<A HREF="/pdf/Strategic_plan.docx"><IMG SRC="/images/Strategic_plan.PNG" alt="Logo" height="120" width="120"></a></br>
										<a href="/pdf/Strategic_plan.docx">download Strategic Plan</a>										

										
										<!--<li><a href="#">Morbi ligula volutpat</a></li>-->
																		
<!-- link to the treaty of waitangi-->

<body>
<style>
img {
    opacity: 0.4;
    filter: alpha(opacity=40); /* For IE8 and earlier */
}

img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
</style>
</head>
<body>


</body>

<!-- link ends here-->
	

		</section>
								<section class="6u">


									<ul class="default">
										<li><a href="#sidebar8">Parihaka Influence</a></li>									
										<li><a href="#sidebar2">Fall of Pukerangiora</a></li>
										<li><a href="#sidebar4">Carved Meeting House for Waiwhetu</a></li>
										<li><a href="#sidebar5">Opening of the Meeting House</a></li>

									</ul>
<!--<h1>Image Transparency</h1>-->
<A HREF="http://www.nzhistory.net.nz/files/documents/treaty-kawharau-footnotes.pdf"><IMG SRC="/images/treaty-of-waitangi.jpg" alt="Logo"></a>	
<a href="http://www.nzhistory.net.nz/files/documents/treaty-kawharau-footnotes.pdf">View Treaty of Waitangi</a>
<!--<p><b>Note:</b> In IE, a !DOCTYPE must be added for the :hover selector to work on other elements than the a element.</p>-->



									

								</section>
							</div>
						</section></br>
						
						
						
						
						<section>

</body>
</html>
					
					</br>
							<header>
								<bidi-override><h2><font color="red">Latest</font> News</h2></bidi-override>
							</header>
							<ul class="style">
								<li>
									<p><a href="https://www.youtube.com/watch?v=Opz6WUhdN64">Waiwhetu Marae celebrates 50th anniversary</a></p>
									<p class="posted">May 21, 2014  |  (10 ) <a href="http://192.168.252.113/dashboard/wordpress/wp-login.php">Comments</a></p>
								</li>
								<li>
									<p><a href="https://www.youtube.com/watch?v=Opz6WUhdN64">Waiwhetu Marae celebrates 50th anniversary</a></p>
									<p class="posted">May 21, 2014  |  (10 ) <a href="http://192.168.252.113/dashboard/wordpress/wp-login.php">Comments</a></p>								</li>
							</ul>
						</section>
					</div>
					
				</div>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Arohanui Ki Te Tangata. Nau Mai, Haere Mai Kia Mau Ki To Maoritanga&rdquo;</blockquote>

				</section>
			</div>
		</div>
		
		
<!-- /banner -->

	<!-- /Tweet -->

	
	<!--
	<div class="container">
   <div class="column-center">Column center</div>
   <div class="column-left">Column left</div>
   <div class="column-right">Column right</div>
    </div>
	-->
	<!-- Footer -->

						
					<!--<h2><b><font color="Blue">Latest</b></font> News</h2>-->
						<!--
						<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
						
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
					-->
				</section>
			</div>
			
			<div class="column-center">
					</br>
					<!--
								<section >
									<ul class="default">
									<hr width="600">
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
									</ul>
							</section>
					-->		
				<!-- test section end here -->
			</div>
			</div>
			<!-- test section end here
						<div class="container" style="width:40%;padding:0;float:left;">
				<!-- test section
								<section >
									<ul class="default">
										<li><a href="#">Donec facilisis tempor</a></li>
										<li><a href="#">Nulla convallis cursus</a></li>
										<li><a href="#">Integer congue euismod</a></li>
										<li><a href="#">Venenatis vulputate</a></li>
										<li><a href="#">Morbi ligula volutpat</a></li>
									</ul>
								</section>
				-->
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				 © 2016 All Rights Reserved. | Waiwhetu Marae Website.</div>
		</div>


	</body>
</html>