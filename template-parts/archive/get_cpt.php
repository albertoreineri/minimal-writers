<div class="lista">

    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="articolo-list">

        <div class="row">
            <div class="col-lg-3 my-auto">
                <time>
                    <?php echo get_the_date('j F Y'); ?>
                </time>
            </div>
            <div class="col-lg-6 my-auto">
                <h3>
                    <?php the_title(); ?>
                </h3>
            </div>
            <div class="col-lg-3 my-auto text-center">

                <div class="box-categoria">
                    <?php
                    $terms = get_the_terms($post->ID, 'argomento');
                    foreach ($terms as $term) {
                        echo esc_html__($term->name, '', 'minimal-writers');
                    }
                    ?>
                </div>
            </div>
        </div>
    </a>
    <div class="mb-1"></div>
</div>