
    
    <?php

function post_mg(){
    global $db_con;
    $get_users = "select * from posts where status = 'pending' ";
    $users=mysqli_query($db_con, $get_users);
 
    while($row=mysqli_fetch_array($users)){
        $status = $row['status'];
        $post_id= $row['user_id'];

          $count = mysqli_num_rows($users);
        if($count == NUll)
        {
          
           
        }
        else{
          echo "<td> {$count}</td>";
        }

    }
    
  
    
}

?>
    
    <?php

function notify_post(){
    global $db_con;
    $get_users = "select * from posts where status = 'pending'";
    $posts=mysqli_query($db_con, $get_users);

    while($row=mysqli_fetch_array($posts)){

        $status = $row['status'];
        $post_id =$row['post_id'];
        $pending_image=$row['image'];
        $title=$row['post_title'];
        

        echo "
        <img id='noti_post_image' src='../users/images/$pending_image'  alt='User Image'>
        <a href='index.php?pending_post'>
                    
                   
        ".$title." is waitng ur approval. </a>
    ";
?>

<?php } 
}
?>