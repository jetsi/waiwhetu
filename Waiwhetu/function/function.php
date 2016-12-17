
<?php

function register(){

    if (isset($_POST['submit'])){
        global $db_con;
        $name = mysqli_real_escape_string ($db_con,($_POST['name']));
        $pass1 = mysqli_real_escape_string ($db_con,($_POST['pass1']));
        $pass2 = mysqli_real_escape_string ($db_con,($_POST['pass2']));
        $email = mysqli_real_escape_string ($db_con,($_POST['email']));
        $birthday = mysqli_real_escape_string ($db_con,($_POST['db']));
        $user_role = mysqli_real_escape_string ($db_con,($_POST['user_role']));
        $status ="inactive";
        $post ="no";
        $register_date = date("Y-m-d");
        $password =password_hash($pass1, PASSWORD_DEFAULT);

        $get_email = "select * from users where email='$email'";
        $run_email = mysqli_query($db_con, $get_email);
        $check = mysqli_num_rows($run_email);
        if ($check == 1){
             
           echo" 
        <script>
     $(document).ready(function() {
    $('#post_modal').modal('show');
    });
</script>
        <div class='modal fade' id='post_modal' role='dialog'>
                <div class='modal-dialog modal-sm'>
                <div class='modal-content'>
                    <div class='modal-header' id='post_modal_header_warning'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>This Email is already Registered!</h4>
                                </div>
                    <div class='modal-body''>
                    <p>opp</p>

                    </div>



                </div>
            </div>";
        }

        /* ------------------email validate ----------------------*/
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            
                       echo" 
        <script>
     $(document).ready(function() {
    $('#post_modal').modal('show');
    });
</script>
        <div class='modal fade' id='post_modal' role='dialog'>
                <div class='modal-dialog modal-sm'>
                <div class='modal-content'>
                    <div class='modal-header' id='post_modal_header_warning'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>invalid Email!</h4>
                                </div>
                    <div class='modal-body''>
                    <p>opp</p>

                    </div>



                </div>
            </div>";
        }
       
         /*--------- check password strength ------------------------ */
      /*  else if(strlen($pass1) <= 2 ){

            
        }*/
         /*------------ check confirm oass with pass---------------------*/
        else if($pass1 !== $pass2){
      
                 
                       echo" 
        <script>
     $(document).ready(function() {
    $('#post_modal').modal('show');
    });
</script>
        <div class='modal fade' id='post_modal' role='dialog'>
                <div class='modal-dialog modal-sm'>
                <div class='modal-content'>
                    <div class='modal-header' id='post_modal_header_warning'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>password did not match!</h4>
                                </div>
                    <div class='modal-body''>
                    <p>opp</p>

                    </div>



                </div>
            </div>";
        }
        /*------- check user role --------------------------------  */
     else if($user_role == "0"){
      
                              echo" 
        <script>
     $(document).ready(function() {
    $('#post_modal').modal('show');
    });
</script>
        <div class='modal fade alert alert-danger' id='post_modal' role='dialog'>
                <div class='modal-dialog modal-sm'>
                <div class='modal-content'>
                    <div class='modal-header' id='post_modal_header_warning'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>Pls select one user role!</h4>
                                </div>
                    <div class='modal-body''>
                    <p>opp</p>

                    </div>



                </div>
            </div>";
     }
       
        else{

        $register_insert = "insert into users (user_name,user_password,email,birthday,post,status,user_role,register_date)";
        $register_insert .= "value('$name','$password','$email','$birthday','$post','$status','$user_role','$register_date')";
        $insert_to_db = mysqli_query($db_con,$register_insert);
        if($insert_to_db){
            echo "<script>alert('Registration Successful!')</script>";
        }
        else{
            echo "opp something wrong!";
        }
        }
    }
}

?>
































