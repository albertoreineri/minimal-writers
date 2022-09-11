<?php get_header(); ?>

<?php
if (have_posts()) :
?>

	<div class="bg-light pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<?php
					$term = get_queried_object();
					?>
					<h1 class="archive-page-title mb-0"><?php echo esc_html__($term->name, '', 'minimal-writers'); ?></h1>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-12 lista">
				<?php
				while (have_posts()) : the_post();
					get_template_part('template-parts/archive/get_cpt');
				endwhile;
				?>

				<div class="pagination"><?php echo paginate_links(); ?></div>
			<?php
		else :
			echo '<p>No article found...</p>';
		endif;
			?>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>