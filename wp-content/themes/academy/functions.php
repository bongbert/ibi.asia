<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary', 'theme-slug' ) );
  register_nav_menu( 'bottom_nav', __( 'Bottom Nav', 'theme-slug' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

// Active menu
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar', 'sidebar' ),
        'id' => 'sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="title">',
        'after_title'   => '</h3>',
      )
    );
    register_sidebar( array(
        'name' => __( 'Bottom Widget', 'bototm-widget' ),
        'id' => 'bottom-widget',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
      )
  );
}

function otherSections($field) {
  $args = array(
    'post_type' => 'others',
    'posts_per_page' => 1,
    'post_status' => 'publish'
  );
  $query = new WP_Query($args);

  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
      the_field($field);
    endwhile;
    wp_reset_query();
  endif;
}

function custom_menu_page_removing() {
    remove_menu_page('edit-comments.php');
    // remove_menu_page('plugins.php');
    remove_menu_page('admin.php?page=cptui_manage_post_types');
    remove_menu_page('tools.php');
    // remove_menu_page('upload.php');
    remove_menu_page('wp-admin/admin.php?page=wpseo_dashboard');
    remove_menu_page('customize.php');
    
    // remove submenu page
}
add_action( 'admin_init', 'custom_menu_page_removing' );

