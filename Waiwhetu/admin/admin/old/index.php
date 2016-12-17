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
    else  if($_SESSION['user_role'] !== 'admin'){
        header('location:../login.php');
    }
    else{

    }
}
?>
<?php include('../db_con.php'); ?>



<title>AdminPanel</title>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery-3.1.0.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <script src="../bootstrap/js/bootstrap.js" ></script>

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script,Roboto+Condensed" rel="stylesheet">
    <link type="text/css" href="../awesome_font/css/font-awesome.min.css" rel="stylesheet"/>
    <link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="../css/admin_css.css" />

</head>
<!------------------------------------------------------------------------------->
<!-- Notification bar function -->
<!------------------------------------------------------------------------------->
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
    echo "<td> {$count}</td>";
}
?>


<!-------------------------------------------------------------------------------------->
<!-- Notification bar -->
<!--------------------------------------------------------------------------------------->
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
        
        <a href=''>
                      <i class='fa fa-users text-aqua'></i> 
                    </a>
        ".$username."is waitng ur approval.
    ";
?>

<?php } 
}
?>



<body>
    <!---------------------------------------------------------------------->
    <!--  top navigationbar-->
    <!---------------------------------------------------------------------->
    <div class="container-fluid">
    <div class="row">
        <nav>
            <ul class="navbar" id="navbar">
                <div id="nav" class="nav navbar-nav navbar-left">
                    <li><a> Waiwhetu AdminPanel</a></li>
                </div>

                <div  id="nav" class="nav navbar-nav navbar-right">
                    <li>
                        <a> </a>
                    </li>
                    <li>
                        <span id="mail_mg"> <?php mail_mg(); ?></span>

                        <a href="#"  data-toggle="popover" data-placement="bottom"  data-html="true" data-content="<span><?php notification_body(); ?></span>"><span class="glyphicon glyphicon-bell">  </span></a>




                    </li>
                    <li><a href="../include/logout.php">Logout</a></li> 
                </div>

            </ul>
        </nav>
    </div>

    <!--------------------------------------------------------------- -->
    <!--    Side Menu Bar -->
    <!-------------------------------------------------------------------->
    <div class="display-table" >
        <div class="row display-table-row ">

            <div  class="col-md-2 col-lg-2 display-table-cell" id="side-bar">
                <ul class="nav nav-list bs-docs-sidenav side-nav">
                    <div class="dasboard-icon"><span class="glyphicon glyphicon-dashboard"></span><p>Dashboard</p></div>
                    <li><a href="index.php?view_users">  <span class="glyphicon glyphicon-user"></span> View Users     </a></li> 
                    <li><a href="index.php?view_users">  <span class="glyphicon glyphicon-user"></span>  Add Users     </a></li> 
                    <li><a href="index.php?view_posts"> <span class="glyphicon glyphicon-list-alt"></span>   Posts     </a></li> 
                    <li><a href="index.php?view_comments"> <span class="glyphicon glyphicon-comment"></span> Comments  </a></li> 
                    <li><a href="index.php?view_pages"> <span class="glyphicon glyphicon-duplicate"></span>  Pages     </a></li> 
                    <li><a href="index.php?add_pages">  <span class="glyphicon glyphicon-cog"></span>
                        Setting </a></li> 
                </ul>
            </div>

            <div class="col-md-10 col-lg-10 display-table-cell " id="container">

                <?php 
                if((($_SESSION['user_role']) == 'admin_support') || (($_SESSION['user_role']) == 'admin')  ) {



                    if(isset($_GET['view_users'])){


                        include("include/view_users.php");
                    }

                    /*---------------------------------*/
                    /*----------user add new post-------------*/
                    /*---------------------------------*/
                    else if(isset($_GET['view_posts'])){


                        include("include/view_all_post.php");

                ?>
                <table class="table table-bordered col-md-10 col-lg-10">
                    <tr>
                        <th>Title</th>
                        <th>images</th>
                        <th>Post Content</th>
                        <th>Date</th>
                    </tr>
                    <?php echo view_all_post(); ?>
                </table>
                <?php
                    }
                    /*---------------------------------*/
                    /*-------index page show all posts of user role authors------*/
                    /*---------------------------------*/
                    else if(isset($_GET['index'])){


                        include('function/function_view_allpost.php');
                        echo allpost_author();
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
                        <th>date</th> 
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
        </div>
    </div>
    </div>
    </div>
</body>





<!----------------------------------------------------------------------------------->
<style>

</style>


<!----------------------------------------------------------------------------------->
<!-- JaVascript for Notification bar-->
<!----------------------------------------------------------------------------------->

<script>


    /* Notification pop up */
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });

</script>

















<?php ob_flush(); ?>
