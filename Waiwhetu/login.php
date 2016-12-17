
<?php 
include('header.php');

?>
<?php

include_once("db_con.php");
?>


<?php

//include header here





if(isset($_SESSION['user_role'])){
    if($_SESSION['user_role'] == 'author'){
        header('location:users/index.php');
    }
    else  if($_SESSION['user_role'] == 'admin'){
        header('location:admin/index.php');
    }
    else{

    }
}
?>

<div id="login_panel" class="panel panel-default col-md-4 col-md-offset-4 col-lg-3 col-lg-offset-5">
    <div class="panel-body">
    <h1>Sign In</h1>

    <form id="login" action="login.php" class="form-group" method="post">
         <div class="input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input class="form-control" type="text" name="email" id="name" placeholder="Email" required/>
        </div>
   

        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
      
            <input type="password" class="form-control"  type="password" name="pass" id="name" placeholder="Confirm  Password" required/>
        </div>




         <div class="input-group col-lg-12">
            <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
            <button id="submit" type="submit" class="btn btn-success btn-block" name="submit"> Submit</button>
        </div>

         <div class="input-group">
            <p>Forgot Password ? <a href="login.php">click Here</a></p>
        </div>


    </form>
</div>
</div>



<style>
    body{
        background: ;
    }
</style>
<?php

if(isset($_POST['submit'])){
    $user= $_POST['email'];
    $password= $_POST['pass'];
    $user_email = mysqli_real_escape_string ($db_con, $user);
    $password = mysqli_real_escape_string ($db_con, $password);
    $query="SELECT * FROM users where email ='$user_email'";
    $result = mysqli_query($db_con, $query);
    if(!$result){
        die("Opp". mysqli_error($connection));
    }

    //
    while($row = mysqli_fetch_array($result)){
        $username = $row['user_name'];
        $db_email = $row['email']  ;
        $db_password = $row['user_password'];
        $userid = $row['user_id'];
        $user_role= $row['user_role'];
        $active =$row['status'];
 

    if($user_email !== $db_email && !password_verify($password, $db_password)) {
        header('location:login.php');
    }

    // if user and pass is currect then create session
    else if(password_verify($password,$db_password)) {
        if($active == "inactive"){
            echo "<script>alert('Your account is not active yet !');</script>";
        }
        else if($active == "active"){
            $_SESSION['user_id'] = $userid;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $db_email;

            $_SESSION['password'] = $user_password;
            $_SESSION['user_role'] = $user_role;
            header('Location:login_check.php');
        }
       }
     //
        else{
            echo"wrong password!";
        }

    }
}

?>



<style>
    body{
        background: url(images/bg.jpg) no-repeat center center fixed;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
    }

</style>


























