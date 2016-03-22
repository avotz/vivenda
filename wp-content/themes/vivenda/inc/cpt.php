<?php

add_filter( 'rwmb_meta_boxes', 'vivenda_register_meta_boxes' );

function vivenda_register_meta_boxes( $meta_boxes )
{

    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'additional_information',
        'title'    => 'Información Adicional',
        'pages'    => array('projects' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
             array(
                'name'  => 'Logo del proyecto',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'project_logo',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
             array(
                'name'  => 'Fotos del proyecto (banner)',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'project_thumb',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
             array(
                'name'  => 'Fotos de Modelos',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'project_model',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'models'
                
            ),
              array(
                'name'  => 'Provincia',
                'id'    => $prefix . 'province',
                'type'  => 'select',
                'std'   => '',
                'class' => 'province',
                'options' => array(
                    'Guanacaste' => 'Guanacaste',
                    'San Jose' => 'San Jose',
                    'Alajuela' => 'Alajuela',  
                    'Heredia' => 'Heredia',
                    'Cartago' => 'Cartago', 
                    'Puntarenas' => 'Puntarenas',
                    'Limon' => 'Limón'
                     )
                
                
            ),
             array(
                'name'  => 'Zona',
                'id'    => $prefix . 'zone',
                'type'  => 'text',
                'std'   => '',
                'class' => 'zone'
                
                
            ),
             array(
                'name'  => 'Precio',
                'id'    => $prefix . 'price',
                'type'  => 'text',
                'std'   => '',
                'class' => 'price'
               
               
                
            ),
             array(
                'name'  => 'Cuota',
                'id'    => $prefix . 'cuota',
                'type'  => 'text',
                'std'   => '',
                'class' => 'cuota'
               
               
                
            ),
             array(
                'name'  => 'Area(M2)',
                'id'    => $prefix . 'area',
                'type'  => 'text',
                'std'   => '',
                'class' => 'area'
               
               
                
            ),
             // Map requires at least one address field (with type = text)
            array(
              'id'   => $prefix . 'addressMap',
              'name' =>  'Dirección (Mapa)',
              'type' => 'text',
              'std'  => ''
            ),
            array(
              'id'            => $prefix .'map',
              'name'          => 'LocationMap',
              'type'          => 'map',
              // Default location: 'latitude,longitude[,zoom]' (zoom is optional)
              'std'           => '-6.233406,-35.049906,15',
              // Name of text field where address is entered. Can be list of text fields, separated by commas (for ex. city, state)
              'address_field' => $prefix . 'addressMap',
            )
          
             

        )
    );
    


    return $meta_boxes;
}


//custom post type services
function my_custom_post_projects() {
  $labels = array(
    'name'               => _x( 'Projects', 'post type general name' ),
    'singular_name'      => _x( 'Project', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Project' ),
    'add_new_item'       => __( 'Add New Project' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Project' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No Projects found' ),
    'not_found_in_trash' => __( 'No Projects found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Projects'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our projects and project specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'projects', $args ); 
}
add_action( 'init', 'my_custom_post_projects' );

function my_updated_messages( $messages ) {
  global $post, $post_ID;
  $messages['projects'] = array(
    0 => '', 
    1 => sprintf( __('Project updated. <a href="%s">View Project</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Project updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Project restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Project published. <a href="%s">View Project</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Project saved.'),
    8 => sprintf( __('Project submitted. <a target="_blank" href="%s">Preview Project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Project scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Project</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Project draft updated. <a target="_blank" href="%s">Preview Project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages' );

function my_taxonomies_projects() {
  $labels = array(
    'name'              => _x( 'Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Project Categories' ),
    'all_items'         => __( 'All Project Categories' ),
    'parent_item'       => __( 'Parent Project Category' ),
    'parent_item_colon' => __( 'Parent Project Category:' ),
    'edit_item'         => __( 'Edit Project Category' ), 
    'update_item'       => __( 'Update Project Category' ),
    'add_new_item'      => __( 'Add New Project Category' ),
    'new_item_name'     => __( 'New Project category' ),
    'menu_name'         => __( 'Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'category_project', 'projects', $args );
}
add_action( 'init', 'my_taxonomies_projects', 0 );
