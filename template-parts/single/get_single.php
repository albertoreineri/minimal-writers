<div id="post-<?php the_ID(); ?>" <?php post_class('class-name'); ?>>
    <article class="post testo-articolo">
        <div class="bg-light pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="post-info mb-2">
                            <?php echo esc_html__('By', 'minimal-writers'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                            | <?php the_time('j F Y'); ?>
                        </div>

                        <h1><?php the_title(); ?></h1>
                        <?php
                        get_template_part('template-parts/single/get_current_category');
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <?php the_content(); ?>
                    <div class="single-post-comments">
                        <?php comments_template(); ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>

<?php wp_link_pages(); ?>