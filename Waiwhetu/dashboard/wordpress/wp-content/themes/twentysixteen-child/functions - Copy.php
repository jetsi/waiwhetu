<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/login-logo.png);
             width:600px; height:100px; background-size:100%;
            padding-bottom: 5px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>