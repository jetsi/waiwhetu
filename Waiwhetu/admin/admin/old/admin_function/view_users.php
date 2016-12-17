<?php include('../../db_con.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
<script src="../../bootstrap/js/bootstrap.min.js"></script>


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
            <td><?php echo $userId; ?></td>
            <td><?php echo $username ;?></td>
            <td><?php echo $username;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $status;?></td>
            <td><a href="fetch_user.php?edit="></a></td>
        </tr>
        <?php } 
}
?>

    
    <table class="table table-bordered">
        <tr>
            <th>User ID</th> 
            <th>User Name</th> 
            <th>User Role</th> 
            <th>Email</th> 
            <th>Status</th> 
            <th>Edit</th> 
        </tr>
        <?php notification_body(); ?>

    </table>