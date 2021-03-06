
<?php
 

 function view_pending_post(){
    
     global $db_con;
      $query = "select * from posts where status='pending' order by post_id desc";
     

    $query = mysqli_query($db_con, $query);

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
        <td>
            <?php echo $author; ?>
        </td>
        <td>
            <?php echo $post_title; ?>
        </td>
        <td>
            <img id="view_image" src="../users/images/<?php echo $post_image; ?>" />
        </td>

        <td >
            <span class="more"><?php echo $post_content; ?></span>
        </td>

        <td class="">
            <?php echo $post_date; ?>
        </td>
        
        <td class="">
           <a href="#" data-toggle="modal" data-target="#approve<?php echo $post_id; ?>">Approve Now  </a>




        <!---------------------------------------------------------->
        <!---------- To edit Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->
 <!---------------------------------------------------------->
        <!---------- To Delete Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->
        <form method="post">
            <div class="modal fade" id="approve<?php echo $post_id; ?>" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="delete_post_title">

                                <div class="alert alert-success">
                                    <strong>!</strong>  Are you sure you want to delete this post ?
                                </div>
                            </h4>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" name="approve<?php echo $post_id;?>" class="btn btn-success">Comfirm Approve</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            if(isset($_POST['approve'.$post_id])){
                $approve ='approved';
                $query ="UPDATE  posts SET status='{$approve}' where post_id='$post_id'";
                $approve_query =mysqli_query($db_con,$query);
                if ($approve_query){
                    echo "<script>alert('Successfully Approved!'); </script>";
                    echo "<script>window.open('index.php?pending_post' ,'_self')</script>";                  
                }
                else{
                   echo "<script>alert('Error!'); </script>";
                }
            }

            ?>
        </form>
        </td>
        <td class="">
            <a href="#" data-toggle="modal" data-target="#deleteModal<?php echo $post_id; ?>"><?php echo $post_id; ?>Delete</a>


        <!---------------------------------------------------------->
        <!---------- To Delete Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->
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

                                <img style="width:50px;" src="../users/images/<?php echo $post_image; ?>" />

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
                    echo "<script>window.open('index.php?view_posts' ,'_self')</script>";                  
                }
                else{
                   echo "<script>alert('Error!'); </script>";
                }
            }

            ?>
        </form>
        </td>
    </tr>

<?php }
     
      
      }


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