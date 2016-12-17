<?php session_start(); ?>
<?php ob_start(); ?>

<?php

if(isset($_SESSION['user_role'])){
    if(($_SESSION['user_role'] == 'admin') || ($_SESSION['user_role'] == 'admin_support')  ){

        header("location:admin/index.php");
    }
    else if(($_SESSION['user_role'] == 'author') || ($_SESSION['user_role'] == 'staff') || ($_SESSION['user_role'] == 'member') || ($_SESSION['user_role'] == 'trustee') || ($_SESSION['user_role'] == 'author')){
        header("location:users/index.php");
    }
    else if(($_SESSION['user_role'] == 'subscriber') ){
        header("location:index.php");
    }
    else{
        echo "??";
    }
}
?>