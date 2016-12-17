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
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
                        <li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="news_and_events.php">News and Events</a></li>
						<li><a href="marae_booking.php">Marae Booking</a></li>
						<li><a href=contact_us.php>Contact Us</a></li>
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

	
		
		
	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<header>
			<h2>Whakatauki</h2>
				</header>
				<p><strong>Waiwhetu ki runga!<br>Waiwhetu ki te rangi!<br>He tipua ki te ripo!<br>He kaitiaki ki te whenua!</strong></p>
                <p>Whakamārama o te Koke Kōrero:<br>
                 As long as the stars continue to shine in the heavens, the reflections in the water will forever remain, confirming Waiwhetu's existence from time immemorial. The ripple symbolizes a phenomenon of importance, namely the many manuhiri that have traversed up Waiwhetu river. This part of the koke kōrero acknowledges and confirms that first part, that as long as people continue to come to our marae, the guardians of the land namely, Ngāti Hamua, Te Matehou, Puketapu and Mangatuku will continue to exercise and practise of Manaaki Tāngata (e.g. King Tuheitia to the 50th Anniversary of our Marae, the Kōhanga Reo Movement)</p>
                      <br>
			
			<hr />
				      <div class="row">
					<section class="4u">
						
						<span class="pennant"><span class="fa fa-smile-o"></span></span>
						<h3>About Us</h3>
					     <p>The people of Waiwhetu have an eternal affinity emanating Te Kāhui maunga... read more</p>
						<a href="about.html" class="button button-style1">Read More</a>
					</section>
					<section class="4u">
						<span class="pennant"><span class="fa fa-book"></span></span>
						<h3>News and Events</h3>
						<p>Find out about the latest news and events happening at the Waiwhetu Marae... read more</p>
						<a href="news_and_events.html" class="button button-style1">Read More</a>
					</section>
					<section class="4u">
						<span class="pennant"><span class="fa fa-globe"></span></span>
						<h3>Marae Booking</h3>
						<p>To book for Functions, Events or Meetings, feel free to use our online booking form... read more</p>
						<a href="marae_booking.html" class="button button-style1">Book Now</a>
					</section>

				</div>
			</div>
		</div>

		

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
				<blockquote>&ldquo;Arohanui Ki Te Tangata. Nau Mai, Haere Mai Kia A Mau Ki To Maoritanga&rdquo;</blockquote>
				</section>
			</div>
		</div>





		<!-- Main -->
		<div id="main">
			<div id="content" class="container">

	
		<h2><font size="5.23em">Contact Us</h2></font></br>
	<div class="form-group">
        <label class="col-md-3 control-label">Query</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="fullName" size="52"  />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Email</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="email" size="52" />
        </div>
    </div>
	
	
   
       <div class="form-group"> 
        <label class="col-md-3 control-label">Information:</label></br></br>
<div class="col-md-6">		
      <select class="floatLabel" >
        <option value="blank">Please select..</option>
        <option value="single-bed">I am a member of the public. </option>
        <option value="double-bed" selected>I am a whanau.</option>
		<option value="double-bed" selected>I am a from a iwi/haapu</option>
		<option value="double-bed" selected>Other</option>
      </select>
</div>     
     </div>     
   
	
    <div class="form-group">
        <label class="col-md-3 control-label">Message</label>
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
 
	
	
	 </div>

			</div>
		</div>

		
	

	<!-- Copyright -->
		<div id="copyright">
			<div class="container" >
				 © 2016 All Rights Reserved. | Waiwhetu Marae Website.
			</div>
		</div>

	</body>
</html>