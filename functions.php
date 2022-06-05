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

defined( 'CHLD_THM_CFG_IGNORE_PARENT' ) or define( 'CHLD_THM_CFG_IGNORE_PARENT', TRUE );


    

// END ENQUEUE PARENT ACTION
/* 

loader jquery form script */

    /* parameters: handle/navn, src, dependencies(andre javascript filer), version, in_footer = true/false i footer eller header */

/*     function add_js_scripts(){

    wp_enqueue_scripts('js_scripts', get_stylesheet_directory_uri(). '/js/form_script.js',[],'1.0.0', false)
}
  */

  function wpb_hook_javascript() {
    ?>
        <script>

function myFunction() {
  var element = document.getElementById("kontaktbox");
  element.classList.toggle("mystyle");
}
        </script>
    <?php
}
add_action('wp_head', 'wpb_hook_javascript');
 