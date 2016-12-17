<?php include('../db_con.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
<script src="../bootstrap/js/bootstrap.min.js"></script>

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



<style>
    th{
        background:#2C82C9;
        color:white;
        padding:0px;
    }
</style>

<table class="table">
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
</table>


<ul>

    <li>
        <span id="mail_mg"> <?php mail_mg(); ?></span>
        <a href="#" id="notificationLink">Notifications</a>
        <div id="notificationContainer">
            <div id="notificationTitle">Notifications</div>
            <div id="notificationsBody" class="notifications"> <?php notification_body(); ?></div>
            <div id="notificationFooter"><a href="#">See All</a></div>
        </div>
    </li>
</ul>


<style>
    #notificationContainer 
    {
        background-color: #fff;
        border: 1px solid rgba(100, 100, 100, .4);
        -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
        overflow: visible;
        position: absolute;
        
        margin-left: 0px;
        width: 400px;
        z-index: -1;
        display: none; // Enable this after jquery implementation 
    }
    // Popup Arrow
    #notificationContainer:before {
        content: '';
        display: block;
        position: absolute;
        width: 0;
        height: 0;
        color: transparent;
        border: 10px solid black;
        border-color: transparent transparent white;
        margin-top: -20px;
        margin-left: 188px;
    }
    #notificationTitle
    {
        font-weight: bold;
        padding: 8px;
        font-size: 13px;
        background-color: #ffffff;
        
        z-index: 1000;
        width: 384px;
        border-bottom: 1px solid #dddddd;
    }
    #notificationsBody
    {
        padding: 33px 0px 0px 0px !important;
        min-height:300px;
       
       
    }
    #mail_mg 
    {
        padding: 3px 7px 3px 7px;
        background: #cc0000;
        color: #ffffff;
        font-weight: bold;
        margin-left: 77px;
        border-radius: 9px;
        -moz-border-radius: 9px; 
        -webkit-border-radius: 9px;
        position: absolute;
        margin-top: -11px;
        font-size: 11px;
    }
    #notificationFooter
{
background-color: #e9eaed;
text-align: center;
font-weight: bold;
padding: 8px;
font-size: 12px;
border-top: 1px solid #dddddd;
}
</style>


<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script type="text/javascript" >
    $(document).ready(function()
                      {
        $("#notificationLink").click(function()
                                     {
            $("#notificationContainer").fadeToggle(300);
            $("#mail_mg").fadeOut("slow");
            return false;
        });

        //Document Click hiding the popup 
        $(document).click(function()
                          {
            $("#notificationContainer").hide();
        });

        //Popup on click
        $("#notificationContainer").click(function()
                                          {
            return false;
        });

    });
</script>




















