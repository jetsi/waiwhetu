

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

    if($_SESSION['user_role'] == 'author'){
        header('location:../../users/index.php');
    }
    else  if($_SESSION['user_role'] !== 'admin'){
        header('location:../../login.php');
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
    <td><?php  ?> Edit</td>
    <td><?php  ?>Delete</td>
    <tr>

    </tr>
    <?php  } } ?>
