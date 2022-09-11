<?php
function wr_customize_css()
{ ?>

	<style type="text/css">
		a {
			color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
		}

		.nav-link:hover {
			color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?> !important;
		}

		.navbar-light .navbar-brand:focus,
		.navbar-light .navbar-brand:hover {
			color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?> !important;
		}

		.btn-outline-primary {
			color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
			border-color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
		}

		.btn-outline-primary:hover {
			background-color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
			border-color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
		}

		.lista a .row:hover {
			background-color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>99 !important;
		}

		.box-categoria {
			border: 1px solid <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>99 !important;
			color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?> !important;
		}

		.box-categoria:hover {
			background-color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?> !important;
			color: black !important;
		}

		.nav-link {
			color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
		}

		.btn-primary {
			background-color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
			border-color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
		}

		.btn-primary:hover {
			border-color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
			color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
		}

		header a i:hover {
			color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
		}

		.dropdown-menu>li>a:hover,
		.dropdown-menu>li>a:focus {
			background-color: <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
		}

		.lista a .row:hover {
			border: 2px solid <?php echo get_theme_mod('wr_primary_color_setting', '#00afe5') ?>;
		}
	</style>

<?php
}
add_action('wp_head', 'wr_customize_css');

?>