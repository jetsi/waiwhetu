<?php ob_start();?>
<?php
session_start();

?>
<!-- Session check -->
<?php
if (!$_SESSION['user_role']){
    header('location:../login.php');
}
if(isset($_SESSION['user_role'])){

    if($_SESSION['user_role'] == 'author'){
        header('location:../users/index.php');
    }


    else if (($_SESSION['user_role'] == 'admin_support') || ($_SESSION['user_role'] == 'admin')){
        header('localtion:index.php');
    }
    else{
         header('location:../login.php');

    }
}
?>
<?php include('../db_con.php'); ?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminPanel</title>
        <script src="../js/jquery-3.1.0.min.js"> </script>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->

        <link rel="stylesheet" href="../awesome_font/css/font-awesome.min.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <script src="../js/jquery-3.1.0.min.js"></script>
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
page. However, you can choose any other skin. Make sure you
apply the skin class to the body tag so the changes take effect.
-->
        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
        <link type="text/css" rel="stylesheet" href="../css/admin_css.css" />

        <script src="../js/date_time.js"> </script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>





    <?php

    function mail_mg(){
        global $db_con;
        $get_users = "select * from users where status = 'inactive'";
        $users=mysqli_query($db_con, $get_users);

        while($row=mysqli_fetch_array($users)){
            $username = $row['status'];
            $user_id = $row['user_id'];

            $count = mysqli_num_rows($users);

        }
        if ( isset($count) ) echo "<td> {$count}</td>";
    }
    ?>

    <?php

    function notification_body(){
        global $db_con;
        $get_users = "select * from users where status = 'inactive'";
        $users=mysqli_query($db_con, $get_users);

        while($row=mysqli_fetch_array($users)){

            $username = $row['user_name'];
            $userRole =$row['user_role'];
            $userId =$row['user_id'];
            $email =$row['email'];
            $status =$row['status'];

            echo "

        <a href='index.php?pending_user'>
                      <i class='fa fa-users text-aqua'></i> 

        ".$username." is waitng ur approval. </a>
    ";
    ?>

    <?php } 
    }
    ?>




    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="index.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Waiwhutu</b>-Project</span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a> 

                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <li class="dropdown messages-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label  label-warning"><?php include('include/notify_post.php'); echo post_mg();?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header label-warning">You have <?php  echo post_mg();?> pending posts !</li>
                                    <li>
                                        <!-- inner menu: contains the messages -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="">
                                                    <div class="pull-left">
                                                        <!-- User Image -->
                                                        <?php echo  notify_post(); ?>
                                                    </div>
                                                    <!-- Message title and timestamp -->

                                                    <!-- The message -->

                                                </a>
                                            </li>
                                            <!-- end message -->
                                        </ul>
                                        <!-- /.menu -->
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- /.messages-menu -->





                            <!------------------------------------->
                            <!-- Notifications Menu -->
                            <!------------------------------------>

                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span>
                                    <span class="label label-warning"> 
                                        <?php mail_mg(); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header label-warning">You have  <?php mail_mg(); ?> notifications</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class="menu">
                                            <li><!-- start notification -->
                                                <a href="">
                                                    <?php notification_body(); ?>
                                                </a>
                                            </li>
                                            <!-- end notification -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>







                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" >
                                    <!-- The user image in the navbar-->
                                    <img src="../users/images/<?php echo $user_image; ?>" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class=""><?php echo $_SESSION['user_role'];?></span>
                                </a>

                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="../include/logout.php" >Log Out</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>









            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">



                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>






                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li style="color:white;" class="header"><b>Waiwhetu Dasboard</b></li>
                        <!-- Optionally, you can add icons to the links -->
                        <li><a href="index.php?index">  <i class="fa fa-home" aria-hidden="true"></i> Home     </a></li> 
                        <li><a href="index.php?view_users"> <i class="fa fa-users" aria-hidden="true"></i></span> View Users     </a></li> 
                        <li><a href="index.php?add_user">  <i class="fa fa-user-plus" aria-hidden="true"></i></span>  Add New Users     </a></li> 
                        <li><a href="index.php?view_posts"> <span class="glyphicon glyphicon-list-alt"></span> View Posts     </a></li> 
                        <li><a href="index.php?add_post"> <span class="glyphicon glyphicon-duplicate"></span>  Add New Post     </a></li> 
                        <li><a href="index.php?view_comments"> <span class="glyphicon glyphicon-comment"></span> Comments  </a></li> 
                        <li><a href="index.php">  <span class="glyphicon glyphicon-cog"> Setting</span>

                            </ul>
                            <!-- /.sidebar-menu -->
                        </section>
                    <!-- /.sidebar -->
                    </aside>



                <!---------------------------------------->
                <!-- Content Wrapper. Contains page content -->
                <!--------------------------------------------->
                <div class="content-wrapper" style="background-color:#ecf0f5;">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Welcome <?php echo $_SESSION['user_role']; ?>
                            <small><span id="date_time"></span>
                                <script type="text/javascript">window.onload = date_time('date_time');</script></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"></i> </a></li>
                    <li class="active"> </li>
                    </ol>
                </section>

            <!-- Main content -->
            <section class="content" style="background-color:#ecf0f5;">
                <div>
                    <?php 
                    if((($_SESSION['user_role']) == 'admin_support') || (($_SESSION['user_role']) == 'admin')  ) {



                        if(isset($_GET['view_users'])){


                            include("include/view_users.php");
                        }

                        /*---------------------------------*/
                        /*----------View pending posts-------------*/
                        /*---------------------------------*/
                        else if(isset($_GET['pending_post'])){


                            include("include/pending_post.php");
                    ?>
                    <table class="table table-bordered col-md-10 col-lg-10">
                        <tr>
                            <th>Name</th> 
                            <th>title</th> 
                            <th>Image</th> 
                            <th>Content</th> 
                            <th>date</th> 
                            <th>Approve</th> 
                            <th>Delete</th> 
                        </tr>   
                        <?php  view_pending_post();?>
                    </table>
                    <?php }  

                        /*---------------------------------*/
                        /*----------View pending users-------------*/
                        /*---------------------------------*/
                        else if(isset($_GET['pending_user'])){


                            include("include/pending_user.php");
                    ?>
                    <table class="table table-bordered col-md-10 col-lg-10">
                        <tr>
                            <th>User Name</th> 
                            <th>user ID</th> 
                            <th>User Role</th> 
                            <th>user Email</th> 
                            <th>date</th> 
                            <th>Approve</th> 
                            <th>Delete</th> 
                        </tr>   
                        <?php  view_pending_user();?>
                    </table>
                    <?php }  

                        /*----------------user add new post-----------------*/
                        /*-----------------------*/
                        /*---------------------------------*/
                        else if(isset($_GET['view_posts'])){


                            include("include/view_all_post.php");
                        }
                        /*---------------------------------*/
                        /*-------index page show all posts of user role authors------*/
                        /*---------------------------------*/
                        else if(isset($_GET['index'])){


                            include('include/welcome.php');

                        }    
                        /*---------------------------------*/
                        /*-------Add New post------*/
                        /*---------------------------------*/
                        else if(isset($_GET['add_post'])){


                            include('include/add_post.php');

                        }    /*---------------------------------*/
                        /*-------Add New user------*/
                        /*---------------------------------*/
                        else if(isset($_GET['add_user'])){


                            include('include/add_user.php');

                        }  


                        /*---------------------------------*/
                        /*----------this is to view user Comments-------------*/
                        /*---------------------------------*/
                        else if(isset($_GET['view_comments'])){


                            include('include/view_comment.php');
                    ?>
                    <table class="table table-bordered col-md-10 col-lg-10">
                        <tr>
                            <th>Post ID</th> 
                            <th>Comments</th> 
                            <th>Comments By</th> 
                            <th>date</th> 
                            <th>Approve</th> 
                            <th>Delete</th> 
                        </tr>   
                        <?php  MyComments(); ?>
                    </table>
                    <?php }  

                        /*---------------------------------*/
                        /*----------this is to view user posts-------------*/
                        /*---------------------------------*/
                        else if(isset($_GET['my_post'])){


                            include('function/view_my_post.php');
                    ?> <table class="table table-bordered col-md-10 col-lg-10">
                    <tr>
                        <th>Post title</th>
                        <th>Post image</th>
                        <th>Post content</th>
                        <th>post date</th>
                    </tr>
                    <?php  MyPost(); ?></table>
                    <?php } 
                        else if(isset($_GET['delete'])){

                            include('function/delete_user.php');

                        }

                        else{
                            include('include/welcome.php');

                        }

                    }
                    ?>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer"style="background-color:#ecf0f5;">
            <div  id="footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Dev [Papa | Aleena | Jetsi]
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2016 <a href="#">Waiwhetu</a>.</strong> All rights reserved.
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript::;">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript::;">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="pull-right-container">
                                        <span class="label label-danger pull-right">70%</span>
                                    </span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
        </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
Both of these plugins are recommended to enhance the
user experience. Slimscroll is required when using the
fixed layout. -->
    </body>
</html>
<script src="../js/readmore.js"></script>