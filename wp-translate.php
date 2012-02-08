<?php
/*
Plugin Name: WP Translate
Plugin URI: http://labs.hahncreativegroup.com/plugins-for-wordpress/
Description: Add Google Translate to your WordPress site
Author: HahnCreativeGroup
Version: 0.6
Author URI: http://labs.hahncreativegroup.com/
*/

function translate_Init() {
	?>
    <script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'auto',
    floatPosition: google.translate.TranslateElement.FloatPosition.TOP_RIGHT
  });
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <?php	
}
add_action('wp_footer', 'translate_Init');

function create_prosperity_plugin_links($links, $file) {
			
	if ( $file == plugin_basename(__FILE__) ) {			
		$links[] = '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EJVXJP3V8GE2J">' . __('Donate', 'wp-translate') . '</a>';
	}
	return $links;
}
add_filter('plugin_row_meta', 'create_prosperity_plugin_links', 10, 2);

//function add_wp_translate_menu() {
//	add_menu_page(__('WP Translate','menu-wptranslate'), __('WP Translate','menu-wptranslate'), 'manage_options', 'wptranslate-admin', 'show_translate_menu' );
//}
//add_action( 'admin_menu', 'add_wp_translate_menu' );
//
//function show_translate_menu()
//{
//	include("admin/overview.php");
//}

?>