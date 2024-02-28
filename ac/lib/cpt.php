<?phpif (!function_exists('wac_cottage_features')){    //Feature Post Type    function wac_cottage_features()    {        $labels = array(            'name' => _x('Features', 'post type general name'),            'singular_name' => _x('Feature', 'post type singular name'),            'add_new' => _x('Add New', 'Feature'),            'add_new_item' => __('Add New Feature'),            'edit_item' => __('Edit Feature'),            'new_item' => __('New Feature'),            'all_items' => __('All Features'),            'view_item' => __('View Feature'),            'search_items' => __('Search Features'),            'not_found' => __('No Features found'),            'not_found_in_trash' => __('No Features found in the trash'),            'parent_item_colon' => '',            'menu_name' => 'Features'        );        $args = array(            'labels' => $labels,            'menu_icon' => 'dashicons-star-filled',            'description' => 'Cottage Features',            'public' => true,            'menu_position' => 9,            'supports' => array('title','editor', 'thumbnail','custom-fields','revisions'),            'has_archive' => false,            'publicly_queryable' => false        );        register_post_type('ac-feature', $args);        //Feature Tags        $labels = array(            'name'              => _x( 'Feature Tags', 'taxonomy general name' ),            'singular_name'     => _x( 'Feature Tag', 'taxonomy singular name' ),            'search_items'      => __( 'Search Feature Tags' ),            'all_items'         => __( 'All Feature Tags' ),            'edit_item'         => __( 'Edit Feature Tag' ),            'update_item'       => __( 'Update Feature Tag' ),            'add_new_item'      => __( 'Add New Feature Tag' ),            'new_item_name'     => __( 'New Tile Feature Tag' ),            'menu_name'         => __( 'Feature Tags' ),        );        $args = array(            'hierarchical'      => false,            'labels'            => $labels,            'show_ui'           => true,            'show_admin_column' => true,            'query_var'         => true,            'rewrite'           => array( 'slug' => 'ac-feature-tag' ),            'publicly_queryable' => false        );        register_taxonomy( 'ac-feature_tag', array( 'ac-feature' ), $args );    }    add_action('init', 'wac_cottage_features');}