



 <?php  
 function comments_count(){
            /*count comments for this post*/

            $get_users = "select * from comments where comment_post_id ='$post_id'";

            $count_comments=mysqli_query($db_con, $get_users);

            while($row=mysqli_fetch_array($count_comments)){
                $count = mysqli_num_rows($count_comments);
                $cm_post_id =$row['comment_post_id'];
            }
           }

 if($cm_post_id &&  $post_id ==''){
                    
                }
                else{
                echo "<span id='comment_count'>$count</span>";
                
            }
?>
