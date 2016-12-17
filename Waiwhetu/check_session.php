<?php
include('db_con.php');
ob_start();
if(!session_id()) session_start();


?>

    
<?php    
 /*function get_user_info(){
     global $db_con;

    if(isset($_SESSION['user_role']) == 'author'){
       
            global $db_con;
        $user = $_SESSION['username'];
            $get_users = "select * from users where user_name='$user'";
            
    
    $query = mysqli_query($db_con, $get_users);

    while($row_users = mysqli_fetch_array($query)){

        $user_id = $row_users['user_id'];
        $user_name = $row_users['user_name'];
        $user_email = $row_users['email'];
        $user_role = $row_users['user_role'];
        $user_status = $row_users['status'];
         
     
       
       
        }
         echo $user_name;
    }
 else {}
}*/

?>
    <?php ob_flush(); ?>