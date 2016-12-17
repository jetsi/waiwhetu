<?php
include('header.php');
include_once('../db_con.php');

if(!session_id())session_start();
?>
<!DOCTYPE HTML>
<title>Home</title>

<?php 
if (!$_SESSION['user_role']){
    header('location:../login.php');
}
if(isset($_SESSION['user_role'])){

    if($_SESSION['user_role'] === 'admin'){
        header('location:../admin/index.php');
    }
    else{

    }
}
?>


<!----------------------------------------------->
<!-----------Main content------------>
<!----------------------------------------------->
<div id="content " class=" col-md-12 col-lg-10 col-lg-offset-1">
    <div class=" user-profile-div col-sm-2 col-md-2 col-lg-2 col-xs-0">
        <div class="user-profile form-group">
            <!-- SIDEBAR USERPIC -->

            <!--  -->
            <!-- SIDEBAR USER -->
            <div class=" form-group ">



                <div class="">
                    <?php
                    if(!isset($_SESSION['user_role'])){

                    }
                    else { 

                        global $db_con;
                        $author =  $_SESSION['user_id'];

                        $user_profile= "select * from users where user_id = '$author '";

                        $query = mysqli_query($db_con, $user_profile);

                        while($row_users = mysqli_fetch_array($query)){

                            $name = $row_users['user_name'];
                            $user_id = $row_users['user_id'];

                            $user_image = $row_users['user_image'];

                            $register_date = $row_users['birthday'];
                            //  ?>





                    <div class="form-group">
                        <center><img id="user_image"  src="images/<?php echo $user_image; ?> "/></center>
                        <center><h3><?php echo $name; ?></h3></center>



                    </div>


                    <hr>

                    <ul class='nav user_profile'>
                        <li><a href='index.php?index'> <span class='glyphicon glyphicon-home'></span> Home  </a></li>
                        <li><a href='index.php?pages'><span class='glyphicon glyphicon-cog'></span> User Profile  </a></li> 
                        <?php
                            if((($_SESSION['user_role'])=='staff') || (($_SESSION['user_role'])=='trustee')){
                           
                            ?>
                        <li><a href='index.php?my_post'><i class="fa fa-file-text-o" aria-hidden="true"></i> My Posts  </a></li>

                        <li><a href='index.php?comment'><i class="fa fa-comments" aria-hidden="true"></i> My Comments</a></li>
                        <li><a href='index.php?post'><span class='glyphicon glyphicon-pencil'></span> Add Post   </a></li>
                          <?php }
                        else{
                            
                        }
                        ?>
                        
                        <li><a href='../include/logout.php'><i style="" class="fa fa-power-off" aria-hidden="true"></i> Sign Out </a></li>

                    </ul>

                    <?php } } ?>
                </div>

            </div>



        </div>
    </div>



    <!----------------------------------------------->
    <!--------------main content (post)--------------->
    <!----------------------------------------------->

    <div class="container col-xs-12 col-sm-10 col-md-10 col-lg-10 " id="container">
        <div class="post">
            <?php 
            if((($_SESSION['user_role']) == 'member') || (($_SESSION['user_role']) == 'staff') || (($_SESSION['user_role']) == 'trustee') ) {



                if(isset($_GET['pages'])){


                    include("user_setting.php");
                }

                /*---------------------------------*/
                /*----------user add new post-------------*/
                /*---------------------------------*/
                else if(isset($_GET['post'])){


                    include("function/add_post.php");
                }
                /*---------------------------------*/
                /*-------index page show all posts of user role authors------*/
                /*---------------------------------*/
                else if(isset($_GET['index'])){


                    include('function/function_view_allpost.php');
                    echo allpost_author();
                }  
                else if(isset($_GET['my_post&id={$post_id}'])){


                    include('function/edit_post.php');
                    
                }  


                /*---------------------------------*/
                /*----------this is to view user Comments-------------*/
                /*---------------------------------*/
                else if(isset($_GET['comment'])){


                    include('function/view_my_comments.php');
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
                <?php 
        
        if($_SESSION['user_role'] == 'trustee'){
            ?>
            <th>Edit Post</th>
            <th>Delete Post</th>
                <?php } ?>
            </tr>
            <?php  MyPost(); ?></table>
            <?php } 
                else if(isset($_GET['delete'])){

                    include('function/delete_user.php');

                }

                else{
                    include('function/function_view_allpost.php');
                    echo allpost_author();
                }

            }
            ?>
            </div>
        </div>	

    </div>