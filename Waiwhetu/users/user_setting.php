
<?php 
include_once('../db_con.php');
?>
<?php  include_once('function/function_view_user.php'); ?>

<title>jet</title>
 <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
   

<table class="table table-bordered col-md-10 col-lg-10 col-sm-12 col-xs-12">
    <tr>
       
        <th>User Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>User Role</th>
        <th>Status</th>
        <th>Edit</th>
      

    </tr>
 <?php   user_setting(); ?>
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