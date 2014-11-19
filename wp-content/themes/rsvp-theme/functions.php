<?php
    

    add_theme_support( 'post-thumbnails' ); 


    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    



    function register_my_menu() {
        register_nav_menu('main-menu',__( 'Main Menu' ));
    }
    add_action( 'init', 'register_my_menu' );

    



    // Replaces the excerpt "more" text by a link
    function new_excerpt_more($more) {
        global $post;
        return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');



    


    if ( ! function_exists( 'page_navigation' ) ) :
    function page_navigation() {
        global $wp_query;

        $big = 999999999; // need an unlikely integer
        
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    }
    endif;


?>