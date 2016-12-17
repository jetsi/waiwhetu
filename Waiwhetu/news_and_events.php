<?php
ob_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

?>
<?php
include('db_con.php');
include('check_session.php');
?>

<!DOCTYPE HTML>
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
	<!-- test css code for news -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
type="text/javascript"></script>

<style type="text/css">
@import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

#feedControl {
margin-top : 10px;
margin-left: left;
margin-right: auto;
width : 800px;
font-size: 12px;
color: red;
}
</style>
<script type="text/javascript">
function load() {
var feed ="http://feeds.bbci.co.uk/news/world/rss.xml";
new GFdynamicFeedControl(feed, "feedControl");

}
google.load("feeds", "1");
google.setOnLoadCallback(load);


</script>
		<!-- test code for news end here -->
		
			<!-- test css code for news -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
type="text/javascript"></script>

<style type="text/css">
@import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

#feedControl {
margin-top : 10px;
margin-left: left;
margin-right: auto;
width : 320px;
font-size: 12px;
color: red;
}
</style>
<script type="text/javascript">
function load() {
var feed ="http://feeds.reuters.com/Reuters/worldNews";
new GFdynamicFeedControl(feed, "feedControl");

}
google.load("feeds", "1");
google.setOnLoadCallback(load);


</script>
		<!-- test code for news end here -->
		
	
<!-- another test code here for images -->
<style>
img {
    opacity: 1.0;
    filter: alpha(opacity=40); /* For IE8 and earlier */
}

img:hover {
    opacity: 0.4;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
</style>
<!-- another test code ends here -->	
		
		
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
			
			
			
			
			
				<!-- Nav -->
				<nav id="nav">
				
			
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li class="active"><a href="news_and_events.php">News and Events</a></li>
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
								<h2></h2>
							</header>
					</div>

						
      <!-- body starts here -->                          
<body>

					
							<header>
								<h2><font size="5.23em">Update with WAIWHETU's News</h2></font><p>
							</header>
					
							<header>
								<h2><font size="3.23em">1. Long-awaited birthing centre for Wellington expected in 2017</h2></font><p> 
							</header>					
					<a href="http://www.stuff.co.nz/national/health/80332015/longawaited-birthing-centre-for-wellington-expected-in-2017" target="_blank"><img src="/newspix/birthing_center.jpg" alt="Mountain View" style="width:330px;height:250px;"></a>
					<br/>
					<p>Wellington birthing centre advocates' labour of love has finally borne fruit, although it's not exactly what the doctor ordered. </p>
					<p>Construction on a 12-suite birthing centre will start in Lower Hutt next month, and it is expected to open its doors mid-2017. </p>
					<p>The Melling Birthing Centre will be operated by Birthing Centre, owned by the Wright Family Foundation, a registered charitable trust.</p>
					<p></p>

				<p>
							<header>
								<h2><font size="3.23em">2. Let My Whakapapa Speak (clip 1)</h2></font><p>
							</header>

				<!-- Start NZ On Screen - Let My Whakapapa Speak - Clip: Let My Whakapapa Speak (clip 1) Size: 585px by 410px -->
<iframe width="390px" height="290px" src="http://www.nzonscreen.com/embed/90cd4a58ee781312" frameborder="0" allowfullscreen></iframe> 
<!-- End NZ On Screen - Let My Whakapapa Speak - Clip: Let My Whakapapa Speak (clip 1) -->
				</p>

				
							<header>
								<h2><font size="3.23em">3. Update with BBC News</h2></font><p>
							</header>	
							
<div id="body">
<div id="feedControl">Loading...</div>
</div>

				<br><p><a href="https://www.facebook.com/huttnews/?fref=nf">For more information check our facebook news page.</a></p>







</body>
<!-- body ends here -->




									
                                    
								</section>
							</div>
						</section>
						
						
						
						
						<section>
							<header>
								<bidi-override><h2><font color="red">Latest</font> News</h2></bidi-override>
							</header>
							</br>
							<ul class="style">
								<li>
									<p><a href="https://www.youtube.com/watch?v=Opz6WUhdN64">Waiwhetu Marae celebrates 50th anniversary</a></p>
									<p class="posted">May 21, 2014  |  (10 ) Comments</p>
								</li>
								<li>
									<p><a href="https://www.youtube.com/watch?v=Opz6WUhdN64">Waiwhetu Marae celebrates 50th anniversary</a></p>
									<p class="posted">May 21, 2014  |  (10 ) Comments</p>								
								</li>

								<li>
									<p><a href="https://www.youtube.com/watch?v=Opz6WUhdN64">Waiwhetu Marae celebrates 50th anniversary</a></p>
									<p class="posted">May 21, 2014  |  (10 ) Comments</p>
								</li>
								<li>
									<p><a href="https://www.youtube.com/watch?v=Opz6WUhdN64">Waiwhetu Marae celebrates 50th anniversary</a></p>
									<p class="posted">May 21, 2014  |  (10 ) Comments</p>								
								</li>
								
						    <header>
								<bidi-override><h2><font color="red">Additional</font> News</h2></bidi-override>
							</header>
							
								<li>
									<p><a href="http://www.nzonscreen.com/title/let-my-whakapapa-speak-2008" target="_blank">Let My Whakapapa Speak (clip 1)</a> </p>
									<p class="posted">May 21, 2016  |  (10 ) Comments</p>
								</li>
								
								<li>
									<p><a href="http://www.nzonscreen.com/title/bastion-point---the-untold-story-1999" target="_blank">The Untold Story.</a> </p>
									<p class="posted">May 21, 2016  |  (10 ) Comments</p>
								</li>								
								<li>
									<p><a href="http://www.nzonscreen.com/title/gallipoli-the-new-zealand-story-1984">Gallipoli: The New Zealand Story, Television - 1984</a></p>
									<p class="posted">May 21, 2014  |  (10 ) Comments</p>								
								</li>							
							
							
							
							

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
					<blockquote>&ldquo;Arohanui Ki Te Tangata. Nau Mai, Haere Mai Kia A Mau Ki To Maoritanga&rdquo;</blockquote>

				</section>
			</div>
		</div>
		
		

				</section>
			</div>
			
			<div class="column-center">
					</br>
					
			</div>
			</div>
			
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
            <div class="container">
                © 2016 All Rights Reserved. | Waiwhetu Marae Website.
            </div>
			</div>
		</div>


	</body>
</html>