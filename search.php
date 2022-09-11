<?php get_header(); ?>
<div class="bg-light pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<?php
				if (get_search_query() == "") {
				?>
					<h1><?php echo esc_html__('Search', 'minimal-writers'); ?>:</h1>
					<p>
						<?php echo esc_html__('Are you looking for something?', 'minimal-writers'); ?>

						<?php get_template_part('searchform'); ?>
					</p>
				<?php
				} else {
				?>
					<h1><?php echo esc_html__('Searching for', 'minimal-writers'); ?> <?php the_search_query(); ?>:</h1>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

<div class="container mt-5">
	<div class="row">
		<div class="col-12">
			<?php
			if (get_search_query() != "") {
				if (have_posts()) :
					while (have_posts()) : the_post();
						get_template_part('template-parts/archive/get_article');
					endwhile;
				else :
					echo '<p>Nessun articolo trovato...</p>';
				endif;
			}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>