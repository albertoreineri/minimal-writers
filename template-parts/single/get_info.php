<div class="post-info">
    <?php the_time('j F Y - g:i a'); ?> |
    <?php esc_html__('Author: ', 'minimal-writers')?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
    <?php esc_html__('Category: ', 'minimal-writers')?>
    <?php get_template_part('template-parts/single/get_current_category'); ?>
</div>