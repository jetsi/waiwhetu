

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
           
        <script src="../js/jquery-3.1.0.min.js"> </script>
       
        <script src="../bootstrap/js/bootstrap.min.js" ></script>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
       
        <link href="../awesome_font/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
     
    </head>
   
  <h1 style="text-align:center;">Add New User</h1>
<?php 

if($_SESSION['user_role']=='admin') { ?>
    <form style="padding:40px;" action="" class="form-horizontal regi-form" method="post">
        
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                <input type="text" class="form-control" name="name"  placeholder="User name" required/>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"> <span class="glyphicon glyphicon-lock"></span></div>
                <input class="form-control" type="password" name="pass1"  placeholder="Password" required/>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"> <span class="glyphicon glyphicon-lock"></span></div>
                <input class="form-control" type="password" name="pass2" id="name" placeholder="Confirm  Password" required/>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <input class="form-control" type="text" name="email" id="name" placeholder="Email" required/>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                <input class="form-control" type="date" name="db" id="name" placeholder="date of birth" required/>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
                <select class="form-control" name="user_role">
                    <option value="0">SELECT USER ROLE</option>
                    <option value="admin support">admin support</option>
                    <option value="trustee">trustee</option>
                    <option value="author">author</option>
                    <option value="staff">staff</option>
                </select>
            </div>
        </div>

        <div class="input-group">
            <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
            <button class="btn btn-success" type="submit" name="submit"> Add Now</button>
        </div>

        

    </form>
<?php


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
                            <h4 class='modal-title'>Plaese Input valid Email Address !</h4>
                                </div>
                    <div class='modal-body''>
                    <p>opp</p>

                    </div>



                </div>
            </div>";
        }
       
         /*--------- check password strength ------------------------ */
        else if(strlen($pass1) <= 2 ){
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
                            <h4 class='modal-title'>Plaese password should be min 2</h4>
                                </div>
                    <div class='modal-body''>
                    <p>opp</p>

                    </div>



                </div>
            </div>";
            
        }
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
                            <h4 class='modal-title'>opp</h4>
                                </div>
                    <div class='modal-body''>
                    <p>Paswword not match</p>

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
        <div class='modal fade' id='post_modal' role='dialog'>
                <div class='modal-dialog modal-sm'>
                <div class='modal-content'>
                    <div class='modal-header' id='post_modal_header_warning'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4 class='modal-title'>Plaese Input valid Email Address !</h4>
                                </div>
                    <div class='modal-body''>
                    <p>Chose User Role</p>

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
            echo "<script>alert('Opp!')</script>";
        }
        }
    }
}
else{
    echo "<center class='alert alert-danger'> Sorry, you have no privileges to  Add  new users !</center>";
}

?>