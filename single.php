<?php
get_header();
?>
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					get_template_part('template-parts/single/get_single');
				endwhile;
			else :
				get_template_part('404');
			endif;
			?>

<?php
get_footer();
?>