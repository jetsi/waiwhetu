  <?php

    function mail_mg(){
        global $db_con;
        $get_users = "select * from users where status = 'active'";
        $users=mysqli_query($db_con, $get_users);

        while($row=mysqli_fetch_array($users)){
            $username = $row['status'];
            $user_id = $row['user_id'];

            $count = mysqli_num_rows($users);

        }
        echo "<td> {$count}  Inactive user</td>";
    }
    ?>



<?php

function notification_body(){
         global $db_con;
        $get_users = "select * from users";
        $users=mysqli_query($db_con, $get_users);
        while($row=mysqli_fetch_array($users)){
            $username = $row['user_name'];
            $userRole =$row['user_role'];
            $userId =$row['user_id'];
            $email =$row['email'];
            $status =$row['status'];

        ?>
        <tr>
            
            <td><?php echo $username ;?></td>
            <td><?php echo $username;?></td>
            <td><?php echo $email;?></td>
           
            
        </tr>
        <?php } 
}
?>

    
    <table class="table table-bordered">
       
        <?php notification_body(); ?>

    </table>






