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
// 
// Indsætter javascript i headeren på alle sider
function wpb_hook_javascript() {
    ?>
        <script>
//fjerner flex så boxen bliver gemt
function hideBox() {
  var x = document.getElementById("kontaktboks");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
	x.style.display = "flex";
  }
}
			
     function contactWindow() {
      var contactWindow = window.open("http://net-informations.com", "_blank", "top=100, left=100, width=800, height=500, menubar=yes,toolbar=yes, scrollbars=yes, resizable=yes");
      }
        </script>
    <?php
}
//javascript bliver tilføjet til wordpress headeren og loader derfor på alle sider.
add_action('wp_head', 'wpb_hook_javascript');
 