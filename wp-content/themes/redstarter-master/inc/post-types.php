<?php 

function my_custom_post_types(){
    $post_types = array("product", "journal", "adventure");
    foreach ($post_types as $type) {
        register_post_type($type, get_params($type));
        taxonomy_init($type);
    }
}

function taxonomy_init($type) {
    // create a new taxonomy
    register_taxonomy(
        $type.'category',
        $type,
        array(
            'label' => __( $type.' Categories' ),
            'hierarchical' => true,
            'rewrite' => array( 'slug' => $type.'-category' ),
        )
    );

    register_taxonomy(
        $type.'tag',
        $type,
        array(
            'label' => __( $type.' Tags ' ),
            'rewrite' => array( 'slug' => $type.'-tags' ),
        )
    );

}

function get_params($type) {
    $labels = array(
        'name' => _x($type.'s', 'post type general name'),
        'singular_name' => _x($type, 'post type singular name'),
        'add_new' => _x('Add New', 'book'),
        'add_new_item' => __('Add New '.$type),
        'edit_item' => __('Edit '.$type),
        'new_item' => __('New '.$type),
        'all_items' => __('All '.$type.'s'),
        'view_item' => __('View '.$type),
        'search_items' => __('Search '.$type.'s'),
        'not_found' => __('No '.$type.'s found'),
        'not_found_in_trash' => __('No '.$type.'s found in the Trash'),
        'parent_item_colon' => '',
        'menu_name' => $type.'s',
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Holds our '.$type.'s and '.$type.' specific data',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'author'),
        'has_archive' => true,
    );

    return $args;
}

function set_posts_per_page_for_products ( $query ) {
  if ( is_post_type_archive( 'product' ) ) {
    $query->set( 'posts_per_page', '16' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_products' );


//function my_custom_contact_page() {

    //register_post_type( 'Contac', get_params($type));

//}

add_action( 'init', 'my_custom_post_types' );

//add_action( 'init', 'my_custom_contact_page' );

?>