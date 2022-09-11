<?php get_header(); ?>

<?php
if (have_posts()) :
?>

	<div class="bg-light pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h1 class="archive-page-title mb-0"><?php get_template_part('template-parts/archive/get_title'); ?></h1>
					<i><?php echo category_description() ?></i>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			<?php
			if (is_category()) {
			?>
				<div class="col-12 filtro-categorie">
					<?php
					$category = get_category(get_query_var('cat'));
					$cat_id = $category->cat_ID;
					$args = array('child_of' => $cat_id);
					$categories = get_categories($args);
					foreach ($categories as $category) {
						esc_html__($category->count, '', 'minimal-writers')
					?>
						<a href="<?php echo get_category_link($category->term_id) ?>" title="<?php echo esc_html__($category->name, '', 'minimal-writers') ?>">
							<div class="box-categoria me-2 mb-3" style="padding:5px 15px; display:inline-block !important">
								<?php echo esc_html__($category->name, '', 'minimal-writers') ?> (<?php echo esc_html__($category->count, '', 'minimal-writers') ?>)</div>
						</a>
					<?php
					}
					?>
				</div>
			<?php
			}
			?>
		</div>
	</div>

	<div class="container mt-2">
		<div class="row">
			<div class="col-12 lista">
				<?php
				while (have_posts()) : the_post();
					get_template_part('template-parts/archive/get_article');
				endwhile;
				?>
				<div class="pagination pt-5"><?php echo paginate_links(); ?></div>
			<?php
		else :
			echo '<p>No article found...</p>';
		endif;
			?>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>