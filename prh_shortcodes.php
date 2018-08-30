<?php 
// Shortcode table example
// Code file
// phil hardaker aug 30 2018
//
// Usage:
// 1. Copy 3 files (shortcode, template, data) into theme root directory
// 2. Add this line to end of functions.php
//    require_once __DIR__ . '/prh_shortcodes.php';
// 3. Place shortcode into a page or post, in Text tab, not Visual tab
// 4. The data file has sample data in two groupings, Doctors and Teachers
// 5. Syntax:  [prh_table group="{group name}" title="{table title}"]
//    Example: [prh_table group="doctors" title="Doctor Registry"]
// 6. "prh" is used as namespace isolation hack, you can replace with any unique string
//
// See https://codex.wordpress.org/Shortcode_API

// Read data array
require_once(__DIR__ . '/prh_data_groups.php');
$_PRH_TEMPLATE = __DIR__ . '/prh_group_template.php'; 

function prh_table_func( $atts ) {
	// $atts = array( 'group' => 'doctors', 'title' => 'The Docs' )

  $ar = shortcode_atts( array(
    'group' => 'doctors',   // default
    'title' => '',      // default
  ), $atts );

  ob_start();
  echo _prh_build_table($ar);
  return ob_get_clean();
}

add_shortcode( 'prh_table', 'prh_table_func' );

function _prh_build_table( $ar_params ){
  global $prh_data_groups;
  global $_PRH_TEMPLATE;

  $table_html = '';
  // check we can find the template first
  $template = file_get_contents( $_PRH_TEMPLATE );

  if ($template and array_key_exists( 'group', $ar_params )){
    // get group name, doctors? teachers?
    $group = strtolower($ar_params['group']);
    $group_title = $ar_params['title'];

    if (array_key_exists( $group, $prh_data_groups )){
      // filter to just one group
      $data_rows = $prh_data_groups[$group];

      ob_start();
      include $_PRH_TEMPLATE;
      $table_html = ob_get_clean();
    }
  }
  return $table_html;
}

# Simplest shortcode
# Usage: [prh_hey name="Bob"]
function prh_hey( $atts ){
  $ar = shortcode_atts( array(
    'name' => 'whatsyourname',
  ), $atts );

  return "<p>Hey ".$ar['name']."!</p>";
}
add_shortcode('prh_hey', 'prh_hey');

