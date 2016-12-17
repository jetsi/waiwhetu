

<!-------------------------------------------------------->
<!-- checking user session -->
<!-------------------------------------------------------->
<?php
//only if session is not runing or don't --->> this help prevent from "A session had already been started-ignoring session_start" ERROR
    if (!session_id())session_start();  
?>

<?php 
if (!$_SESSION['user_role']){
    header('location:../../login.php');
}
if(isset($_SESSION['user_role'])){

    if(($_SESSION['user_role'] == 'member') || ($_SESSION['user_role'] == 'staff') || ($_SESSION['user_role'] == 'trustee')){
        header('location:../../users/index.php');
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
<table>
    <tr>
        <td class="select_user"><a href="view_users.php?source=authors"><img src="images/user.png" /><br>Users</a></td> 
        <td class="select_user"><a href="view_users.php?only_staffs"><img src="images/user.png" /><br>staffs</a></td> 
        <td class="select_user"><a href="view_users.php?only_authors"><img src="images/user.png" /><br>authors</a></td> 
        <td class="select_user"><a href="view_users.php?only_trustee"><img src="images/user.png" /><br>trustee</a></td> 
        <td class="select_user"><a href=""><img src="images/admin_support.png" /><br>Admin_support</a></td> 
        <td class="select_user"><a href=""><img src="images/admin.png" /><br>admin</a></td> 

    </tr>

</table>



















  <?php
                    if(isset($_GET['source'])){
                        $source =$_GET['source'];
                    }
                    else{
                        $source ='';
                    }


                    switch ($source){
                        case 'authors';
                            include('include/all_author_post.php');
                    ?>
                    <table class="table table-bordered col-md-10 col-lg-10">
                        <tr>
                            <th>Posted BY</th>
                            <th>Post title</th>
                            <th>Post image</th>
                            <th>Post content</th>
                            <th>post date</th>
                            <th>UserRole</th>
                        </tr>
                        <?php   ?></table>
                    <?php
                            break;


                        case '2';
                            echo "this is case 2";
                            break;        

                        case '3';
                            echo "this is case 3";
                            break;        

                        case '4';
                            echo "this is case 4";
                            break;        

                        case '5';
                            echo "this is case 5";
                            break;




                    }

                    ?>



<?php
function all_users(){
    $get_users = "select * from users ORDER by 1 DESC";
    global $db_con;
    $query = mysqli_query($db_con, $get_users);

    while($row_users = mysqli_fetch_array($query)){

        $user_id = $row_users['user_id'];
        $user_name = $row_users['user_name'];
        $user_email = $row_users['email'];
        $user_role = $row_users['user_role'];
        $user_status = $row_users['status'];

       
       
       
    

?>



    <td><?php  echo $user_id; ?></td>
    <td><?php  echo $user_name; ?></td>
    <td><?php   echo $user_email;?></td>
    <td><?php echo $user_role; ?></td>
    <td><?php  echo $user_status; ?></td>
<?php if($_SESSION['user_role']=='admin') { ?>
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
                                <input type="file" id="" name="image"  required><img style="width:50px;" src="../users/images/<?php echo $user_image; ?>" />

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



    <td><?php  ?>Delete</td>
    <tr>
<?php }
        
      
        else{
        echo "";
        }
        ?>
    </tr>
    <?php  } } ?>
