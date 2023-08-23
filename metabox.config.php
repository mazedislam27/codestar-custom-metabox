<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Options                    -
// -----------------------------------------

$options[]    = array(
  'id'        => '_custom_page_options',
  'title'     => 'Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
  //Member Metabox
    array(
      'name'   => 'page_info',
      'fields' => array(
			array(
			  'id'    => 'page_switch',
			  'type'    => 'switcher',
			  'title'   => esc_html__('Please use this switch if you want to on or off the page header', 'mazedulislam27'),
			),
			array(
			  'id'    => 'page_header',
			  'type'    => 'image',
			  'title'   => esc_html__('Please upload the header background image from here', 'mazedulislam27'),
			  'dependency' => array( 'page_switch', '==', 'true' ),
			),
			array(
			  'id'    => 'custom_header_text',
			  'type'    => 'text',
			  'title'   => esc_html__('Please write the custom page header', 'mazedulislam27'),
			  'dependency' => array( 'page_switch', '==', 'true' ),
			),
      ),
    ),
  ),
);

CSFramework_Metabox::instance( $options );