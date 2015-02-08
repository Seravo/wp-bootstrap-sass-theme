<?php
/**
 * Filename: functions.php
 * Project: Seravo Bootstrap SASS Theme
 * Copyright: (c) 2015 Antti Kuosmanen / Seravo Oy
 * License: The MIT License (MIT) http://opensource.org/licenses/MIT
 */


/*
 * include custom navwalker for bootstrap from
 * https://github.com/twittem/wp-bootstrap-navwalker
 */ 
require_once( 'inc/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php' );


/*
 * load theme assets
 */
add_action( 'wp_enqueue_scripts', 'load_theme_assets' );
function load_theme_assets () {

  // theme stylesheets
  wp_register_style( 'default', get_template_directory_uri() . '/assets/css/styles.css' );
  wp_enqueue_style( 'default' );

  // theme font
  //wp_register_style( 'font', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,500' );
  //wp_enqueue_style( 'font' );

  // bootstrap scripts
  wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js' , array( 'jquery' ), '', true );
  wp_enqueue_script( 'bootstrap' );

  // theme scripts
  wp_register_script( 'default', get_template_directory_uri() . '/assets/js/default.js' , array( 'jquery' ), '', true );
  wp_enqueue_script( 'default' );
}

/*
 * register navigation menus
 */
register_nav_menus( array(
    'primary' => 'Navigation',
));
