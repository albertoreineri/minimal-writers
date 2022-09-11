<?php

require_once get_template_directory() . '/functions/resources.php';

require_once get_template_directory() . '/functions/theme-setup.php';

require_once get_template_directory() . '/functions/widgets.php';

require_once get_template_directory() . '/functions/walker.php';

require_once get_template_directory() . '/functions/customize.php';

require_once get_template_directory() . '/functions/css.php';

add_theme_support("title-tag");
add_theme_support( 'automatic-feed-links' );
global $content_width;
if ( ! isset( $content_width ) ) {
	$content_width = 900;
}