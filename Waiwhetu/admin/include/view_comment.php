<?php

function MyComments(){

    
    $get_my_comments= "select * from comments where user_id order by comment_id desc";

    global $db_con;

    $query = mysqli_query($db_con, $get_my_comments);

    while($rows = mysqli_fetch_array($query)){

        $my_comment = $rows['comment_content'];
        
        $date = $rows['comment_date'];        
        $post_id = $rows['comment_post_id'];
        $comment_id = $rows['comment_id'];
        $comment_author = $rows['comment_author'];
?>
<tr>
    <td><?php  echo $post_id;   ?></td> 
    <td><?php   echo $my_comment;   ?></td> 
    <td><?php   echo $comment_author;   ?></td> 
    <td><?php  echo $date;  ?></td> 
    <td><a> approve now</a></td> 
   <td class="">
            <a href="#" data-toggle="modal" data-target="#deleteModal<?php echo $comment_id; ?>"><?php echo $post_id; ?>Delete</a>


        <!---------------------------------------------------------->
        <!---------- To Delete Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->
        <form method="post">
            <div class="modal fade" id="deleteModal<?php echo $comment_id; ?>" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="delete_post_title">

                                <div class="alert alert-danger">
                                    <strong>Warning!</strong>  Are you sure you want to delete this Comment ?
                                </div>
                            </h4>
                        </div>
                       
                        <div class="modal-footer">
                            <button type="submit" name="delete<?php echo $comment_id;?>" class="btn btn-danger">Comfirm Delete</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            if(isset($_POST['delete'.$comment_id])){

                $query ="DELETE FROM comments WHERE comment_id='{$comment_id}'";
                $delete_query =mysqli_query($db_con,$query);
                if ($delete_query){
                    echo "<script>alert('Successfully deleted!'); </script>";
                    echo "<script>window.open('index.php?view_comments' ,'_self')</script>";                  
                }
                else{
                   echo "<script>alert('Error!'); </script>";
                }
            }

            ?>
        </form>
        </td>
</tr> 

<?php
    }}
?>
