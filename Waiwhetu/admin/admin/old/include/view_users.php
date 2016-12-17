<?php ob_start();?>

<?php require_once('function_view_user.php'); ?>




<!-------------------------------------------------------->
<!-- Run below codes if session is admin  -->
<!-- function are from path >> admin/include/function_view_user.php -->
<!-------------------------------------------------------->


  
<table class="table table-bordered">
    <tr>
        <th>UserID</th>
        <th>User Name</th>
        <th>Email</th>
        <th>User Role</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>
 <?php   all_users(); ?>
</table>

<style>
    table{
        margin: auto;

    }
    tr th{
        background-color: #2980b9;
        color:white;
        border:2px;
    }

    tr td{
        padding:10px;
    }
    table tr .select_user{
        text-align: center;
    }

</style>

<?php ob_flush();?>