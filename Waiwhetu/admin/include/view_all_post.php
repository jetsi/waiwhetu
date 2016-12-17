<?php ob_start();?>

<?php require_once('function_view_all_post.php'); ?>




<!-------------------------------------------------------->
<!-- Run below codes if session is admin  -->
<!-- function are from path >> admin/include/function_view_user.php -->
<!-------------------------------------------------------->


  
<table class="table table-responsive">
    <tr >
        <th>Author</th>
        <th>Title</th>
        <th>Image</th>
        <th>Post</th>
        <th>post date</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>
 <?php   view_all_post(); ?>
</table>

<style>
    table{
        margin: auto;

    }
    tr th{
        background-color: #2c3e50;
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