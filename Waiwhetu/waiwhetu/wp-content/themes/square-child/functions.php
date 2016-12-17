<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function my_login_logo() { ?>
    <style type="text/css">
       
        #login h1 a, .login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/login-logo.png);
             width:550px; height:50px;background-size:100%;
            padding-bottom:5px; margin-left:-40px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>

<?php
function admin_default_page() {
return 'http://waiwhetu.devlab.ac.nz/waiwhetu/';
}

add_filter('login_redirect', 'admin_default_page');
?>