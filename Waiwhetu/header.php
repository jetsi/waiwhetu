<?php
ob_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

?>
<?php
include('db_con.php');
include('check_session.php');
?>

<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>

<html>
    <title>Waiwhetu</title>
    <head>
          <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

        <link href="css/main.css" rel="stylesheet" type="text/css" />
 <script src="js/jquery-3.1.0.min.js"> </script>
        <link href="css/Grid.css" rel="stylesheet" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
      
        <link href="awesome_font/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    </head>


    <nav id="nav" class="navbar navbar-default navbar-static-top">
         <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Waiwhetu</a>
            </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right" >
            <li  class = "active"><a href="index.php">Home</a></li> 
            <li><a href="about.php">Adbout Us</a></li> 
            <li><a href="news_and_events.php"> News and events</a></li> 
            <li><a href="marae_booking.php">Marae Booking</a></li> 
            <li><a href="about.php">Contact Us</a></li> 
            <li id="login" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php /*get_user_info();*/ ?> <span class="glyphicon glyphicon-user "></span></a>
                <?php
                if(!isset($_SESSION['user_role'])){
                    
                }
                else{
                    echo "
                        <ul class='dropdown-menu' id='user_info'>
                            <li><a href='index.php?pages'>Account Settings <span class='glyphicon glyphicon-cog'></span></a></li>
                           
                            <li><a href='../include/logout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
                        </ul>
                        ";
                }
               ?>


            </li> 

        </ul> 
        </div>
    </nav>

<script>
    
   $(".nav a").on("click", function(){
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
}); 
    </script>
</html>