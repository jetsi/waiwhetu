<title> hi </title>
<?php
     include('db_con.php');

 function view_author_post(){
    $author ="trustee";
     global $db_con;
      $query = "select * from posts where author='$author' order by author desc";
     $connect = mysqli_query($db_con, $query);
     while($row = mysqli_fetch_array($connect)){
         $user_name = $row['author_name'];
         $post_title = $row['post_title'];
         $post_image = $row['image'];
         $post_content = $row['post_content'];
         $post_date = $row['post_date'];
         
         echo $post_content."<br>";
     }
     
      
      }

echo view_author_post();
?>