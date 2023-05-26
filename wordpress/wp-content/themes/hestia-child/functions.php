<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap','hestia-font-sizes' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
add_action( 'elementor_pro/forms/new_record', function( $record, $ajax_handler ) {
    
    $raw_fields = $record->get( 'fields' );
    $fields = [];
    foreach ( $raw_fields as $id => $field ) {
        $fields[ $id ] = $field['value'];
    }
    
    global $wpdb;
    $output['success'] = $wpdb->insert('form', array('email' => $fields['email'], 'password' => $fields['password'], 'firstname' => $fields['firstname'], 'lastname' => $fields['lastname'], 'nickname' => $fields['nickname'], 'country' => $fields['country'], 'gender' => $fields['gender'], 'martialStatus' => $fields['maritalStatus'], 'profession' => $fields['profession'],'education' => $fields['education']));
    
    $ajax_handler->add_response_data( true, $output );
    
}, 10, 2);

// END ENQUEUE PARENT ACTION
