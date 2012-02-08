<?php
/*
Plugin Name: WP Translate
Description: Add Google Translate to your WordPRess site
Author: Tyson Hahn
Version: .5
Author URI: http://labs.hahncreativegroup.com/wordpress-plugins/prosperity/
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



?>