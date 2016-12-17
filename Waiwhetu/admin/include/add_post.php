
<form  action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="Title"> Post Title</label>
        <input type="text" class="form-control" id="" name="title" required>
    </div>
   
    <div class="form-group">
        <label for="exampleInputFile">Image</label> <span style="color:#e74c3c;">Pls use landscape Image!</span>
        <input type="file" id="" name="image" required>

    </div>
    <div class="form-group">
        <label for="comment">TEXT HERE</label>
        <textarea name="p_text" class="form-control" rows="5" id="comment" required></textarea>
    </div>

    <button type="submit" name="submit" class="btn btn-default">Submit</button>


</form>


<?php


if(isset($_POST['submit'])){
    
    $post_title= mysqli_real_escape_string($db_con,$_POST['title']);
    $post_category= mysqli_real_escape_string($db_con,$_POST['category']);

    //image upload
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($post_image_temp, "images/$post_image");



    $post_p_text= mysqli_real_escape_string($db_con,$_POST['p_text']);
    $post_date = date("y-m-d");
    $post_author = $_SESSION['user_role'];
    $author_name =$_SESSION['username'];
    $user_id = $_SESSION['user_id'];
    if(($_SESSION['user_role'])=='staff'){
    $insert_post = "INSERT INTO posts(user_id,post_title, post_content, image, post_date, author,author_name,status)";
    $insert_post .= "VALUES('{$user_id}','{$post_title}', '{$post_p_text}', '{$post_image}','{$post_date}',  '{$post_author}','{$author_name}','pending')";

    $conect = mysqli_query($db_con, $insert_post);
    if($conect){
        echo" 
        <script>
     $(document).ready(function() {
    $('#post_modal').modal('show');
    });
</script>
        <div class='modal fade' id='post_modal' role='dialog'>
                <div class='modal-dialog modal-lg'>
                <div class='modal-content'>
                    <div class='modal-header' id='post_modal_header'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>Data Inserted !</h4>
                                </div>
                    <div class='modal-body''>
                    <p>Please wait for adminstrator aproval !</p>
                    <button type='button' class='btn btn-default ' data-dismiss='modal'>Close</button>
                    </div>
                    
                    
                    
                </div>
            </div>";
    }
    else{
        echo"noop";
    }
    }
else{
        $insert_post = "INSERT INTO posts(user_id,post_title, post_content, image, post_date, author,author_name,status)";
    $insert_post .= "VALUES('{$user_id}','{$post_title}', '{$post_p_text}', '{$post_image}','{$post_date}',  '{$post_author}','{$author_name}','approved')";

    $conect = mysqli_query($db_con, $insert_post);
    if($conect){
        echo" 
        <script>
     $(document).ready(function() {
    $('#post_modal').modal('show');
    });
</script>
        <div class='modal fade' id='post_modal' role='dialog'>
                <div class='modal-dialog modal-lg'>
                <div class='modal-content'>
                    <div class='modal-header' id='post_modal_header'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>Data Inserted !</h4>
                                </div>
                    <div class='modal-body''>
                    <p>Successfully Posted !</p>
                    <button type='button' class='btn btn-default ' data-dismiss='modal'>Close</button>
                    </div>
                    
                    
                    
                </div>
            </div>";
    }
    else{
        echo"noop";
    }
}
}
?>