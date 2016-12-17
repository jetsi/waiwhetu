<script>
    $(document).ready(function(){

    });



</script>

<?php
function MyPost(){

    $author = $_SESSION['user_id'];
    $get_my_post= "select * from posts where user_id='$author' order by post_id desc";

    global $db_con;

    $query = mysqli_query($db_con, $get_my_post);

    while($row_users = mysqli_fetch_array($query)){

        $author = $row_users['author_name'];
        $post_user_id = $row_users['user_id'];
        $post_id = $row_users['post_id'];
        $post_title = $row_users['post_title'];
        $post_image = $row_users['image'];
        $post_content = $row_users['post_content'];
        $post_date = $row_users['post_date'];




?>

<tr>
    <td class="col-md-2">
        <?php echo $post_title; ?>
    </td>



    <td class="col-md-2">
        <img id="view_image" src="images/<?php echo $post_image; ?>" />
    </td>


    <td class="col-md-6">
        <p class="more"> <?php echo $post_content; ?></p>

    </td>


    <td class="col-md-2">
        <p > <?php echo $post_date; ?></p>
    </td>  
    <?php 

        if($_SESSION['user_role'] == 'trustee'){
    ?>
    <td class="col-md-2">
        <a href="#" data-toggle="modal" data-target="#myModal<?php echo $post_id; ?>">Edit  </a>




        <!---------------------------------------------------------->
        <!---------- To edit Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->

        <div class="modal fade" id="myModal<?php echo $post_id; ?>" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="edit_post_title">Edit Post Form<?php echo $post_id; ?></h4>
                    </div>
                    <div class="modal-body">



                        <form  action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="Title"> Post Title</label>
                                <input type="Title" class="form-control" id="" name="Title" value="<?php echo $post_title; ?>"required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <input type="file" id="" name="image"  required><img style="width:50px;" src="images/<?php echo $post_image; ?>" />

                            </div>
                            <div class="form-group">
                                <label for="comment">Your Post Content</label>
                                <textarea name="content" class="form-control" rows="5" id="comment" <?php echo $post_content; ?> required><?php echo $post_content; ?></textarea>
                            </div>




                            </div>
                        <div class="modal-footer">
                            <button type="submit" name="update<?php echo $post_id;?>" class="btn btn-success">  Submit</button>




                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        </form>

                    <?php

            if(isset($_POST['update'.$post_id])){
                
                    $update_title=$_POST['Title'];
                    $update_content=$_POST['content'];
                //image upload
                $post_image = $_FILES['image']['name'];
                $post_image_temp = $_FILES['image']['tmp_name'];

                move_uploaded_file($post_image_temp, "images/$post_image");
                
                $query ="UPDATE posts SET post_title='$update_title',image='$post_image',post_content='$update_content' where post_id='$post_id'";
                $update_query =mysqli_query($db_con,$query);
                if ($update_query){
                    echo "<script>alert('Successfully Updated ! ');</script>";
                    echo "<script>window.open('index.php?my_post' ,'_self')</script>";
                }
                else{
                     echo "<script>alert('Something went wront ! ');</script>";
                    echo "<script>window.open('index.php?my_post' ,'_self')</script>";
                }
            }

                    ?>
                </div>
            </div>
        </div>
    </td> 
    <td class="col-md-2">
        <a href="#" data-toggle="modal" data-target="#deleteModal<?php echo $post_id; ?>">Delete</a>

        <!---------------------------------------------------------->
        <!---------- To Delete Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->
        <form method="post">
            <div class="modal fade" id="deleteModal<?php echo $post_id; ?>" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="delete_post_title">

                                <div class="alert alert-danger">
                                    <strong>Warning!</strong>  Are you sure you want to delete this post ?
                                </div>
                            </h4>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">

                                <h4> Post Title == <?php echo $post_id; ?></h4>
                            </div>

                            <div class="form-group">

                                <img style="width:50px;" src="images/<?php echo $post_image; ?>" />

                            </div>
                            <div class="form-group">
                                <label for="comment">Your Post Content</label>
                                <textarea name="p_text" class="form-control" rows="5" id="comment" <?php echo $post_content; ?> required><?php echo $post_content; ?></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="delete<?php echo $post_id;?>" class="btn btn-danger">Comfirm Delete</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            if(isset($_POST['delete'.$post_id])){

                $query ="DELETE FROM posts WHERE post_id='{$post_id}'";
                $delete_query =mysqli_query($db_con,$query);
                if ($delete_query){
                    echo "<script>alert('Successfully deleted!'); </script>";
                    echo "<script>window.open('index.php?my_post' ,'_self')</script>";                  
                }
                else{
                    echo"";
                }
            }

            ?>
        </form>

    </td>
</tr>







<?php }
        else{

        }
    } }
?>

<style>
    .morecontent span {
        display: none;
    }
    .morelink {
        display: block;
    }
</style>
<script>
    $(document).ready(function() {
        // Configure/customize these variables.
        var showChar = 100;  // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more >";
        var lesstext = "Show less";


        $('.more').each(function() {
            var content = $(this).html();

            if(content.length > showChar) {

                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);

                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                $(this).html(html);
            }

        });

        $(".morelink").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });

</script>







