<?php include_once("header.php"); ?>
<?php include_once('function/function.php'); ?>
<!DOCTYPE HTML>

<div class="form-register col-md-4 col-md-offset-4">
    <h1>Registration</h1>

    <form action="" class="form-horizontal regi-form" method="post">
        <div id="success">
            <div class="success-box">
                <span id="close" style="color:blue;color:white;"><a href="#" onclick="document.getElementById('success').style.display='none'"><i class="fa fa-times-circle" aria-hidden="true"></i></a></span><br>
                <div class="error"> 
                    <span  style="color:white;"><?php register(); ?></span>
                </div>
            </div>
        </div>
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
            <button class="btn btn-success" type="submit" name="submit"> SignUp</button>
        </div>

        <div class="input-group">
            <p>Already a member ? <a href="login.php">Login Here</a></p>
        </div>


    </form>
</div>


<?php

?>