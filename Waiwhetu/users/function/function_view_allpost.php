<?php  include_once('../db_con.php'); ?>


<!-------------------------------------------------------->
<!-- checking user session -->
<!-------------------------------------------------------->
<?php
//only if session is not runing or don't --->> this help prevent from "A session had already been started-ignoring session_start" ERROR
if (!session_id())session_start();  
?>

<?php 
if(!isset($_SESSION['user_role'])){
    header('location:../../login.php');
}
if(isset($_SESSION['user_role'])){

    if($_SESSION['user_role'] == 'admin'){
        header('location:../admin/index.php');
    }
    else{

    }
}
?>

<link href="https://fonts.googleapis.com/css?family=Oleo+Script|Squada+One" rel="stylesheet">


<!-------------------------------------------------------->
<!-- Run below codes if session is author  -->
<!-------------------------------------------------------->

<?php
function allpost_author(){
    if($_SESSION['user_role'] == 'member'){
        $author = $_SESSION['user_role'];
        $get_allpost= "select * from posts where author= 'staff' or author='trustee' order by post_id desc";

        global $db_con;

        $query = mysqli_query($db_con, $get_allpost);

        while($row_users = mysqli_fetch_array($query)){

            $author = $row_users['author_name'];
            $post_user_id = $row_users['user_id'];
            $post_id = $row_users['post_id'];
            $post_title = $row_users['post_title'];
            $post_image = $row_users['image'];
            $post_content = $row_users['post_content'];
            $post_date = $row_users['post_date'];




?>

<table class="col-md-12 col-lg-12">

    <tr> 
        <td ><?php  

            global $db_con;
            $get_post_author = "select * from users where user_id ='$post_user_id'";
            $check = mysqli_query($db_con, $get_post_author);

            while($row_post_author = mysqli_fetch_array($check)){
                $post_author = $row_post_author['user_name'];
                $post_author_image = $row_post_author['user_image'];

            ?>
            <img id="post_user_image" src="images/<?php echo $post_author_image; ?>" /><span class="post_author_name">
            <?php echo $post_author;  ?>
            <p><?php echo $post_date;  ?> </p>

            </span>
            <?php } ?>


        </td>
    </tr>  



<!-------------------------------------->
<!-----------This Post content------------>
<!-------------------------------------->


    <tr> 
        <td >
            <div class="post_image_div col-lg-5 col-lg-offset-3 col-md-4 col-md-offset-4 col-sm-12" >
                <img  class="post_image" id="post_image-<?php echo $post_id?>" class="" src='images/<?php echo $post_image; ?>' />
                <!-- The Modal -->

            </div>
            <div id="myModal" class="modal">
                <span class="close_image">X</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById('post_image-<?php echo $post_id?>');
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close_image")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }
            </script>
        </td>
    </tr>
    <tr>
        <td>
            <h2 id="post_title"><?php  echo $post_title; ?></h2>
            <p  style="text-align: justify;
                       text-indent: 2em;">
                <?php   echo $post_content; ?></p>
        </td>
    </tr>
    <!--<tr>
<td style="width:1170px;" class='user_post'><br>
<p  style="text-align: justify;
text-indent: 2em;"><?php   echo $post_content; ?></p>
</td>
</tr>-->

    <tr >
        <td id="comment_bar">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <span id="post_author"><?php echo "<span class='glyphicon glyphicon-calendar'></span> " . $post_date ."  By " . $author; ?></span>


                <label class='comment_label' data-toggle='collapse' data-target='#comment-<?php echo $post_id; ?>' ><span id='comment_icon' class='glyphicon glyphicon-comment'></span>
                    <?php  

            /*count comments for this post*/

            $get_users = "select * from comments where comment_post_id ='$post_id'";
            $cm_post_id = "";
            $count_comments=mysqli_query($db_con, $get_users);

            while($row=mysqli_fetch_array($count_comments)){

                $cm_post_id =$row['comment_post_id'];
                $count = mysqli_num_rows($count_comments);

            }
            if($cm_post_id == $post_id){


                echo "<span id='comment_count'>$count</span>";

            }     
                    ?>

                    Comments</label>

                <div id='comment-<?php echo $post_id; ?>' class='collapse'>
                    <form method='post' action=''>
                        <textarea name='comment_text'  class='form-control' rows='3' id='comment' ></textarea>
                        <br>
                        <button name='<?php echo $post_id; ?>' class='btn btn-success'>Post</button>
                    </form>
                    <div>

                    </div><br>

                    <?php


            $get_com = "select * from comments where comment_post_id='$post_id'";

            $run_com =mysqli_query($db_con, $get_com);
            while($row = mysqli_fetch_array($run_com)){

                $com = $row['comment_content'];

                echo "<p>".$com."</p>" ;
            }

                    ?>
                </div>
                </td>
    </tr>

</table>
<hr>

<?php 
        } // this is closing for while loop

?>
<?php } ?>  <!--this is closing for user role authhor -->









<!-------------------------------------------------------->
<!-- Run below codes if session is staff  -->
<!-------------------------------------------------------->

<?php

    if($_SESSION['user_role'] == 'staff'){
        $staff = $_SESSION['user_role'];
        $author="author";
        $get_allpost= "select * from posts where  status='approved' order by post_id desc ";

        global $db_con;
        echo mysqli_error($db_con);
        $query = mysqli_query($db_con, $get_allpost);

        while($row_users = mysqli_fetch_array($query)){

            $author = $row_users['author_name'];
            $post_user_id = $row_users['user_id'];
            $post_id = $row_users['post_id'];
            $post_title = $row_users['post_title'];
            $post_image = $row_users['image'];
            $post_content = $row_users['post_content'];
            $post_date = $row_users['post_date'];
?>


<table class="col-md-12 col-lg-12">

    <tr> 
        <td ><?php  

            global $db_con;
            $get_post_author = "select * from users where user_id ='$post_user_id'";
            $check = mysqli_query($db_con, $get_post_author);

            while($row_post_author = mysqli_fetch_array($check)){
                $post_author = $row_post_author['user_name'];
                $post_author_image = $row_post_author['user_image'];

            ?>
            <img id="post_user_image" src="images/<?php echo $post_author_image; ?>" /><span class="post_author_name">
            <?php echo $post_author;  ?>
            <p><?php echo $post_date;  ?> </p>

            </span>
            <?php } ?>


        </td>
    </tr>  






    <tr> 
        <td >
            <div class="post_image_div col-lg-5 col-lg-offset-3 col-md-4 col-md-offset-4 col-sm-12" >
                <img  class="post_image" id="post_image-<?php echo $post_id?>" class="" src='images/<?php echo $post_image; ?>' />
                <!-- The Modal -->

            </div>
            <div id="myModal" class="modal">
                <span class="close_image">X</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById('post_image-<?php echo $post_id?>');
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close_image")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }
            </script>
        </td>
    </tr>
    <tr>
        <td>
            <h2 id="post_title"><?php  echo $post_title; ?></h2>
            <p  style="text-align: justify;
                       text-indent: 2em;">
                <?php   echo $post_content; ?></p>
        </td>
    </tr>
    <!--<tr>
<td style="width:1170px;" class='user_post'><br>
<p  style="text-align: justify;
text-indent: 2em;"><?php   echo $post_content; ?></p>
</td>
</tr>-->

    <tr >
        <td id="comment_bar">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <span id="post_author"><?php echo "<span class='glyphicon glyphicon-calendar'></span> " . $post_date ."  By " . $author; ?></span>


                <label class='comment_label' data-toggle='collapse' data-target='#comment-<?php echo $post_id; ?>' ><span id='comment_icon' class='glyphicon glyphicon-comment'></span>
                    <?php  

            /*count comments for this post*/

            $get_users = "select * from comments where comment_post_id ='$post_id'";
            $cm_post_id = "";
            $count_comments=mysqli_query($db_con, $get_users);

            while($row=mysqli_fetch_array($count_comments)){

                $cm_post_id =$row['comment_post_id'];
                $count = mysqli_num_rows($count_comments);

            }
            if($cm_post_id == $post_id){


                echo "<span id='comment_count'>$count</span>";

            }     
                    ?>

                    Comments</label>

                <div id='comment-<?php echo $post_id; ?>' class='collapse'>
                    <form method='post' action=''>
                        <textarea name='comment_text'  class='form-control' rows='3' id='comment' ></textarea>
                        <br>
                        <button name='<?php echo $post_id; ?>' class='btn btn-success'>Post</button>
                    </form>
                    <div>

                    </div><br>

                    <?php


            $get_com = "select * from comments where comment_post_id='$post_id'";

            $run_com =mysqli_query($db_con, $get_com);
            while($row = mysqli_fetch_array($run_com)){

                $com = $row['comment_content'];

                echo "<p>".$com."</p>" ;
            }

                    ?>
                </div>
                </td>
    </tr>

</table>
<hr>

<?php 
        } // this is closing for while loop

        /*----------------------------------------------------------------------*/
        /*------ If comment submited then insert to comments table----*/
        /*----------------------------------------------------------------------*/

        $query = mysqli_query($db_con, $get_allpost);


        while($row_users = mysqli_fetch_assoc($query)){

            $author = $row_users['author_name'];
            $post_id = $row_users['post_id'];

            if(isset($_POST[$post_id])){

                $comment = $_POST['comment_text'];
                $user_name = $_SESSION['username'];
                $user_id = $_SESSION['user_id'];
                $comment_status= "no";

                if(($comment)  ==''){
                    echo" 
        <script>
     $(document).ready(function() {
    $('#post_modal').modal('show');
    });
</script>
        <div class='modal fade' id='post_modal' role='dialog'>
                <div class='modal-dialog modal-sm'>
                <div class='modal-content'>
                    <div class='modal-header' id='post_modal_header_warning'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>Opp</h4>
                                </div>
                    <div class='modal-body''>
                    <p>Please input some text!</p>

                    </div>



                </div>
            </div>";
                }
                else{

                    $query = "insert into comments (comment_post_id,user_id,comment_author,comment_content,comment_status,comment_date)";
                    $query .= "values ($post_id,$user_id,'{$user_name}','{$comment}','no',now())";
                    $check =mysqli_query($db_con, $query);
                    if(!$check){
                        die('query failed' . mysqli_error($db_con));
                    }
                    else{
                        echo "ddd";
                    }

                }
            }
        }
?>
<?php } ?>
<!----------------------------------------------------------->
<!----------------------------------------------------------->
<!----------------------------------------------------------->
<?php
    if($_SESSION['user_role'] == 'trustee'){
        $trustee = $_SESSION['user_role'];

        $get_allpost= "select * from posts where  status='approved' order by post_id desc ";

        global $db_con;

        $query = mysqli_query($db_con, $get_allpost);

        while($row_users = mysqli_fetch_array($query)){

            $author = $row_users['author_name'];
            $post_user_id = $row_users['user_id'];
            $post_id = $row_users['post_id'];
            $post_title = $row_users['post_title'];
            $post_image = $row_users['image'];
            $post_content = $row_users['post_content'];
            $post_date = $row_users['post_date'];
?>


<table class="col-md-12 col-lg-12">

    <tr> 
        <td><?php  

            global $db_con;
            $get_post_author = "select * from users where user_id ='$post_user_id'";
            $check = mysqli_query($db_con, $get_post_author);

            while($row_post_author = mysqli_fetch_array($check)){
                $post_author = $row_post_author['user_name'];
                $post_author_image = $row_post_author['user_image'];

            ?>
            <img id="post_user_image" src="images/<?php echo $post_author_image; ?>" /><span class="post_author_name">
            <?php echo $post_author;  ?>
            <p><?php echo $post_date;  ?> </p>

            </span>
            <?php } ?>


        </td>
    </tr>  





    <tr> 
        <td >
            <div class="post_image_div col-lg-5 col-lg-offset-3 col-md-4 col-md-offset-4 col-sm-12" style=" position: relative;

                                                                                                           height: 200px;overflow: hidden; border-radius: 5px;

                                                                                                           ">
                <img  class="post_image" id="post_image-<?php echo $post_id?>" class="" src='images/<?php echo $post_image; ?>' />
                <!-- The Modal -->

            </div>
            <div id="myModal" class="modal">
                <span class="close_image">X</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById('post_image-<?php echo $post_id?>');
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close_image")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }
            </script>
        </td>
    </tr>
    <tr>
        <td>
            <h2 id="post_title"><?php  echo $post_title; ?></h2>
            <p  style="text-align: justify;
                       text-indent: 2em;">
                <?php   echo $post_content; ?></p>
        </td>
    </tr>

    <tr >
        <td id="comment_bar">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <span id="post_author"><?php echo "<span class='glyphicon glyphicon-calendar'></span> " . $post_date ."  By " . $author; ?></span>


                <label class='comment_label' data-toggle='collapse' data-target='#comment-<?php echo $post_id; ?>' ><span id='comment_icon' class='glyphicon glyphicon-comment'></span>
                    <?php  

            /*count comments for this post*/

            $get_users = "select * from comments where comment_post_id ='$post_id'";
            $cm_post_id = "";
            $count_comments=mysqli_query($db_con, $get_users);

            while($row=mysqli_fetch_array($count_comments)){

                $cm_post_id =$row['comment_post_id'];
                $count = mysqli_num_rows($count_comments);

            }
            if($cm_post_id == $post_id){


                echo "<span id='comment_count'>$count</span>";

            }     
                    ?>

                    Comments</label>

                <div id='comment-<?php echo $post_id; ?>' class='collapse'>
                    <form method='post' action=''>
                        <textarea name='comment_text'  class='form-control' rows='3' id='comment' ></textarea>
                        <br>
                        <button name='<?php echo $post_id; ?>' class='btn btn-success'>Post</button>
                    </form>
                    <div>

                    </div><br>

                    <?php


            $get_com = "select * from comments where comment_post_id='$post_id'";

            $run_com =mysqli_query($db_con, $get_com);
            while($row = mysqli_fetch_array($run_com)){

                $com = $row['comment_content'];

                echo "<p>".$com."</p>" ;
            }

                    ?>
                </div>
                </td>
    </tr>

</table>
<hr>

<?php 
        } // this is closing for while loop

        /*----------------------------------------------------------------------*/
        /*------ If comment submited then insert to comments table----*/
        /*----------------------------------------------------------------------*/

        $query = mysqli_query($db_con, $get_allpost);


        while($row_users = mysqli_fetch_assoc($query)){

            $author = $row_users['author_name'];
            $post_id = $row_users['post_id'];

            if(isset($_POST[$post_id])){

                $comment = $_POST['comment_text'];
                $user_name = $_SESSION['username'];
                $user_id = $_SESSION['user_id'];
                $comment_status= "no";

                if(($comment)  ==''){
                    echo" 
        <script>
     $(document).ready(function() {
    $('#post_modal').modal('show');
    });
</script>
        <div class='modal fade' id='post_modal' role='dialog'>
                <div class='modal-dialog modal-sm'>
                <div class='modal-content'>
                    <div class='modal-header' id='post_modal_header_warning'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>Opp</h4>
                                </div>
                    <div class='modal-body''>
                    <p>Please input some text!</p>

                    </div>



                </div>
            </div>";
                }
                else{

                    $query = "insert into comments (comment_post_id,user_id,comment_author,comment_content,comment_status,comment_date)";
                    $query .= "values ($post_id,$user_id,'{$user_name}','{$comment}','no',now())";
                    $check =mysqli_query($db_con, $query);
                    if(!$check){
                        die('query failed' . mysqli_error($db_con));
                    }
                    else{
                        echo "<script>window.open('index.php' ,'_self')</script>";
                    }

                }
            }
        }
?>

<?php }} ?>

