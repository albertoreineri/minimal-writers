<?php get_header(); ?>

<div class="container text-center mt-5 pt-5">
    <h1><?php echo esc_html__('Error 404', 'minimal-writers'); ?></h1>
    <h2><?php echo esc_html__('Page Not Found', 'minimal-writers'); ?></h2>
    <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-arrow-left-long"></i> <?php echo esc_html__('Back to Home', 'minimal-writers'); ?></a>
</div>

<?php get_footer(); ?>