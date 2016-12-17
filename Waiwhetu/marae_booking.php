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
		<script src="js/jss.js"></script>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="news_and_events.php">News and Events</a></li>
						<li class="active"><a href="marae_booking.php">Marae Booking</a></li>
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
								    <h2 class="heading">Marae Booking</h2>
							</header>
					</div>		

								
					
					
<!-- booking form-->
<form action=""></br>
<p>Please fill in the fields below to create a booking.</p>
<form id="contactForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-md-3 control-label">Topic</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="fullName" size="53"  />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Email</label>
        <div class="col-md-6">
            <input  type="text" class="form-control" name="email" size="53" />
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

    <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
	   <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Start date.</label></br>
        <input  type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">

      </div>      
    </div>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
	   <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;End date</label></br>
        <input  type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
      </div>      
    </div>
      </div>
	  <label class="col-md-3 control-label">Booking for:</label></br>
	  <br>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
<!--      <i class="fa fa-sort">Book For</i></br>  -->
	  
      <select class="floatLabel" >
      
        <option value="single-bed">Marae Visit </option>
        <option value="double-bed" selected>Educational Visit</option>
		<option value="double-bed" selected>Event</option>
		<option value="double-bed" selected>Function</option>
        <option value="double-bed" selected>Other</option>
      </select>     
     </div>     
   
	</div>
	
	    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="button button-style1">Submit</button>
        </div>
    </div>

	
</form>						
 <!-- /.form-group -->

					</header>
					
					
					</section>



</div>



					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Heritage</h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										<li><a href="about.html#sidebar3">Marae History</a></li>
										<li><a href="about.html#sidebar6">Nga Kaupapa Korero</a></li>	
										<li><a href="about.html#sidebar7">Te Raukura</a></li>	</br>	
										<li><a href="about.html#sidebar9">Tohu Kakahi & Te Whiti o Rongomai</a></li>	
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
										<li><a href="about.html#sidebar8">Parihaka Influence</a></li>									
										<li><a href="about.html#sidebar2">Fall of Pukerangiora</a></li>
										<li><a href="about.html#sidebar4">Carved Meeting House for Waiwhetu</a></li>
										<li><a href="about.html#sidebar5">Opening of the Meeting House</a></li>

									</ul>

<A HREF="http://www.nzhistory.net.nz/files/documents/treaty-kawharau-footnotes.pdf"><IMG SRC="/images/treaty-of-waitangi.jpg" alt="Logo"></a>	
<a href="http://www.nzhistory.net.nz/files/documents/treaty-kawharau-footnotes.pdf">View Treaty of Waitangi</a>




									

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
									<p class="posted">May 21, 2014  |  (10 )Comments</p>
								</li>
								<li>
									<p><a href="https://www.youtube.com/watch?v=Opz6WUhdN64">Waiwhetu Marae celebrates 50th anniversary</a></p>
									<p class="posted">May 21, 2014  |  (10 ) Comments</p>								</li>
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
		
				</section>
			</div>
			
			<div class="column-center">
					</br>
					
			</div>
			</div>
		
			
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