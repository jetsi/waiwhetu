<?php

function MyComments(){

    
    $get_my_comments= "select * from comments where user_id order by comment_id desc";

    global $db_con;

    $query = mysqli_query($db_con, $get_my_comments);

    while($rows = mysqli_fetch_array($query)){

        $my_comment = $rows['comment_content'];
        $date = $rows['comment_date'];        
        $post_id = $rows['comment_post_id'];
?>
<tr>
    <td><?php  echo $post_id;   ?></td> 
    <td><?php   echo $my_comment;   ?></td> 
    <td><?php  echo $date;  ?></td> 
</tr> 

<?php
    }}
?>
