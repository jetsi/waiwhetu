
<?php
 

 function view_pending_user(){
    
     global $db_con;
      $query = "select * from users where status='inactive' order by user_id desc";
     

    $query = mysqli_query($db_con, $query);

    while($row_users = mysqli_fetch_array($query)){

        $user_name = $row_users['user_name'];
        $user_id = $row_users['user_id'];
        $user_role= $row_users['user_role'];
        $user_email = $row_users['email'];
        $regi_date = $row_users['register_date'];




?>

    <tr>
        <td>
            <?php echo $user_name; ?>
        </td>
        <td>
            <?php echo $user_id; ?>
        </td>
        

        <td >
            <span class="more"><?php echo $user_role; ?></span>
        </td>
        <td >
            <span class="more"><?php echo $user_email; ?></span>
        </td>

        <td class="">
            <?php echo $regi_date; ?>
        </td>
        
        <td class="">
           <a href="#" data-toggle="modal" data-target="#approve<?php echo $user_id; ?>">Approve Now  </a>




        <!---------------------------------------------------------->
        <!---------- To edit Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->
 <!---------------------------------------------------------->
        <!---------- To Delete Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->
        <form method="post">
            <div class="modal fade" id="approve<?php echo $user_id; ?>" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="delete_post_title">

                                <div class="alert alert-success">
                                    <strong>!</strong>  Approve Now ?<?php echo $user_id; ?>
                                </div>
                            </h4>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" name="approve<?php echo $user_id;?>" class="btn btn-success">Comfirm Approve</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            if(isset($_POST['approve'.$user_id])){
                $approve ='active';
                $query ="UPDATE  users SET status='{$approve}' where user_id='$user_id'";
                $approve_query =mysqli_query($db_con,$query);
                if ($approve_query){
                    echo "<script>alert('Successfully Approved!'); </script>";
                    echo "<script>window.open('index.php?pending_user' ,'_self')</script>";                  
                }
                else{
                   echo "<script>alert('Error!'); </script>";
                }
            }

            ?>
        </form>
        </td>
        <td class="">
            <a href="#" data-toggle="modal" data-target="#deleteModal<?php echo $post_id; ?>"><?php echo $user_id; ?>Delete</a>


        <!---------------------------------------------------------->
        <!---------- To Delete Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->
        <!---------------------------------------------------------->
        <!---------- To Delete Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->
        <form method="post">
            <div class="modal fade" id="deleteModal<?php echo $user_id; ?>" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="delete_post_title">

                                <div class="alert alert-danger">
                                    <strong>Warning!</strong>  Are you sure you want to delete this user ?
                                </div>
                            </h4>
                        </div>
                        <div class="modal-body">

                      

                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="delete<?php echo $user_id;?>" class="btn btn-danger">Comfirm Delete</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            if(isset($_POST['delete'.$user_id])){

                $query ="DELETE FROM users WHERE user_id='{$user_id}'";
                $delete_query =mysqli_query($db_con,$query);
                if ($delete_query){
                    echo "<script>alert('Successfully deleted!'); </script>";
                    echo "<script>window.open('index.php?pending_user' ,'_self')</script>";                  
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