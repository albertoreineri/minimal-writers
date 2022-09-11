<div class="bg-light pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 testo-articolo">
            <?php the_post_thumbnail('banner-thumbnail'); ?>
            <?php the_content(); ?>
        </div>
    </div>
</div>