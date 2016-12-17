
<?php
 

 function view_all_post(){
    
     global $db_con;
      $query = "select * from posts order by post_id desc";
     

    $query = mysqli_query($db_con, $query);

    while($row_users = mysqli_fetch_array($query)){

        $author = $row_users['author_name'];
        $post_user_id = $row_users['user_id'];
        $post_id = $row_users['post_id'];
        $post_title = $row_users['post_title'];
        $post_image = $row_users['image'];
        $post_content = $row_users['post_content'];
        $post_date = $row_users['post_date'];




?>

    <tr>
        <td>
            <?php echo $post_title; ?>
        </td>
   
    
    
        <td>
            <img id="view_image" src="../users/images/<?php echo $post_image; ?>" />
        </td>
     
   
        <td >
            <span class="readmore"><?php echo $post_content; ?></span>
        </td>
    
   
        <td class="col-md-2">
            <?php echo $post_date; ?>
        </td>
    </tr>

<?php }
     
      
      }


?>
 <script src="../js/readmore.js"></script>