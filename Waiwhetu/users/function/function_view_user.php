
<?php include_once('../db_con.php'); ?>
<!-------------------------------------------------------->
<!-- checking user session -->
<!-------------------------------------------------------->
<?php
//only if session is not runing or don't --->> this help prevent from "A session had already been started-ignoring session_start" ERROR
    if (!session_id())session_start();  
?>

<?php 

if(isset($_SESSION['user_role'])){
     if($_SESSION['user_role'] == 'admin'){
        header('location:../admin/index.php');
    }
    else{

    }
}
 ?>

<!-------------------------------------------------------->
<!-- Run below codes if session is admin  -->
<!-------------------------------------------------------->


<link href="../css/admin_css.css" />
<?php 
include_once('../db_con.php');
?>



<?php
function user_setting(){
    if(isset($_SESSION['user_role']) == 'author'){
    $user_email = $_SESSION['email'];
    $get_users = "select * from users where email= '$user_email' ";
   
    global $db_con;
    $query = mysqli_query($db_con, $get_users);

    while($row_users = mysqli_fetch_array($query)){

        $user_id = $row_users['user_id'];
        $user_name = $row_users['user_name'];
        $user_email = $row_users['email'];
        $user_image = $row_users['user_image'];
        $user_role = $row_users['user_role'];
        $user_status = $row_users['status'];

    
       
       
    

?>



    
    <td><?php  echo $user_name; ?></td>
    <td><?php   echo $user_email;?></td>
    <td><img id="view_image" src="images/<?php echo $user_image; ?>"</td>
    <td><?php echo $user_role; ?></td>
    <td><?php  echo $user_status; ?></td>
<td><a href="#" data-toggle="modal" data-target="#myModal<?php echo $user_id; ?>"> Edit</a>
     <!---------------------------------------------------------->
        <!---------- To edit Post -------->
        <!---------- POP UP Form -------->
        <!---------------------------------------------------------->

        <div class="modal fade" id="myModal<?php echo $user_id; ?>" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="edit_post_title">Edit Post Form<?php echo $user_id; ?></h4>
                    </div>
                    <div class="modal-body">



                        <form  action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="Title"> Post Title</label>
                                <input type="Title" class="form-control" id="" name="Title" value="<?php echo $user_name; ?>"required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <input type="file" id="" name="image"  required><img style="width:50px;" src="images/<?php echo $user_image; ?>" />

                            </div>
                            <div class="form-group">
                                <label for="comment">Your Post Content</label>
                                <textarea name="content" class="form-control" rows="5" id="comment" <?php echo $user_email; ?> required><?php echo $user_email; ?></textarea>
                            </div>




                            </div>
                        <div class="modal-footer">
                            <button type="submit" name="update<?php echo $user_id;?>" class="btn btn-success">  Submit</button>




                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        </form>

                    <?php

            if(isset($_POST['update'.$user_id])){
                
                    $update_name=$_POST['Title'];
                    $update_content=$_POST['content'];
                //image upload
                $post_image = $_FILES['image']['name'];
                $post_image_temp = $_FILES['image']['tmp_name'];

                move_uploaded_file($post_image_temp, "images/$post_image");
                
                $query ="UPDATE users SET user_name='$update_name',user_image='$post_image',email='$user_email' where user_id='$user_id'";
                $update_query =mysqli_query($db_con,$query);
                if ($update_query){
                                      echo "<script>window.open('index.php?pages' ,'_self')</script>";

                   
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



    <tr>

    </tr>
    <?php  } }} ?>