<?php
include_once('../check_session.php');


?>

<html>
    <title>Waiwhetu</title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
            <link href="../css/main.css" rel="stylesheet"/>
        <script src="../js/jquery-3.1.0.min.js"> </script>
       
        <script src="../bootstrap/js/bootstrap.min.js" ></script>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
       
        <link href="../awesome_font/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
       
    </head>


    <nav id="nav" class="navbar navbar-default  navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Waiwhetu</a>
           <a class="navbar-brand"><?php  show_user_role(); ?></a>
             <?php
            function show_user_role(){
                    if(($_SESSION['user_role'])=="author"){
                        echo"You are Author ";
                    }
                    else if(($_SESSION['user_role'])=="staff"){
                        echo"You are staff ";
                    }
            
             else if(($_SESSION['user_role'])=="member"){
                        echo"You are member ";
                    }
            
             else if(($_SESSION['user_role'])=="trustee"){
                        echo"You are Trustee  ";
                    }
            else{
                echo"user role unknown";
            }
            
            
            
            
            
            
            
            }
            ?>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-1">



            <ul id="nav" class="nav navbar-nav navbar-right" >
                <li  class = "active"><a href="index.php?index">Home</a></li> 
                <li><a href="../about.php" data-page="about">Adbout Us</a></li> 
                <li><a href="../news_and_events.php" data-page="news"> News and events</a></li> 
                <li><a href="../marae_booking.php" data-page="booking">Marae Booking</a></li> 
                <li><a href="../about.php" data-page="contact">Contact Us</a></li> 
                <li id="login"  class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown"><?php /*get_user_info(); */?> <span class="glyphicon glyphicon-user "><span class='caret'></span></span></a>
                    <?php
                    if(!isset($_SESSION['user_role'])){

                    }
                    else{
                        echo "
                        <ul class='dropdown-menu' id='user_info'>
                            <li><a href='index.php?pages'>Account Settings <span class='glyphicon glyphicon-cog'></span> </a></li>
                            <li><a href='index.php?post'>Add Post   <span class='glyphicon glyphicon-pencil'></span></a></li>
                            

                            <li><a href='../include/logout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
                        </ul>
                        ";
                    }
                    ?>


                </li> 

            </ul> 

        </div><!-- /.navbar-collapse -->


    </nav>

    <script>

        $(".nav a").on("click", function(){
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        }); 

      

    </script>
    
</html>










































































