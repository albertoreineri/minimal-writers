<?php get_header(); ?>

<?php
if (get_theme_mod('hp-description-setting')) {
?>
    <div class="bg-light pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <?php echo get_theme_mod('hp-description-setting', 'Lorem Ipsum Dolor Sit Amet'); ?>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <div class="clearfix mb-5">
                <h2 class="home-title"><?php echo esc_html__('Last Posts', 'minimal-writers'); ?></h2>
            </div>
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => get_theme_mod('hp_number_of_posts_setting', 5)
            );
            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                get_template_part('template-parts/archive/get_article');
            endwhile;

            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>