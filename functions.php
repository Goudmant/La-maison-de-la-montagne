<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo bloginfo('name'); ?></h1>
    <nav id="navigation">
        <?php wp_nav_menu(array('theme_location' => 'main')); ?>
    </nav>

    <?php dynamic_sidebar('main-sidebar'); ?>
    
</body>
</html>
function register_my_menu(){
register_nav_menu( 'main-menu', 'Menu principal' );
}
add_action( 'after_setup_theme', 'register_my_menu' );

function register_my_sidebars(){
register_sidebar(
array(
    'name' => "Sidebar principale",
    'id' => 'main-sidebar',
    'description' => "La sidebar principale",
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>'
    )
);

register_sidebar(
    array(
    'name' => "Sidebar du footer",
    'id' => 'footer-sidebar',
    'description' => "La sidebar principale",
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>'
    )
);
}
add_action('widgets_init', 'register_my_sidebars');