<?php
function writers_setup()
{
	// Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'minimal-writers'),
		'footer' => __('Footer Menu', 'minimal-writers'),
	));

	// Aggiungo dimensioni immagini custom
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('square-thumbnail', 80, 80, true);
	add_image_size('banner-thumbnail', 920, 400, true);
}
add_action('after_setup_theme', 'writers_setup');

function custom_excerpt_length()
{
	return 150;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function add_last_nav_item($items)
{
	$hour = date('H');
	$darkModeIcon = '<i class="fa-solid fa-sun" id="switch-icon"></i>';

	if ($hour > 20 || $hour < 7) {
		$darkModeIcon = '<i class="fa-solid fa-sun" id="switch-icon"></i>';
	} else {
		$darkModeIcon = '<i class="fa-solid fa-moon" id="switch-icon"></i>';
	}

	if (!isset($_COOKIE['theme'])) {
		setcookie('theme', 'day');
	}
	$theme = $_COOKIE['theme'];
	if ($theme === 'night') {
		$darkModeIcon = '<i class="fa-solid fa-sun" id="switch-icon"></i>';
	} else {
		$darkModeIcon = '<i class="fa-solid fa-moon" id="switch-icon"></i>';

	}

	return $items .= '<li class="nav-item" style="margin-right:10px">
	<a href="/?s" title="Cerca - Alby DEV">
		<i class="fa-solid fa-magnifying-glass" style="margin-top:11px;height:25px; margin-left:10px"></i>
	</a>
</li><li class="nav-item">
<span style="cursor:pointer;margin-top:-3px" class="nav-link " aria-current="page" id="night" href="">
	' . $darkModeIcon . '
</span>
</li>';
}
add_filter('wp_nav_menu_items', 'add_last_nav_item');
