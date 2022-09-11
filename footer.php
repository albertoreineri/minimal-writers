<!-- Footer -->
<footer class="mb-5 mt-5">
    <div class="container">
        <div class="row">
            <?php if (is_active_sidebar('footer1')) : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('footer1'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer2')) : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('footer2'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer3')) : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('footer3'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer4')) : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('footer4'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="col-12 text-center mt-3">
                <?php echo get_theme_mod('wr_credits_setting', 'Copyright 2022 | Made with love in Italy'); ?>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top">
    <i class="fa-solid fa-arrow-turn-up"></i>
</div>

<?php wp_footer(); ?>
</main>

<script>
    templateUri = "<?php echo get_template_directory_uri(); ?>";
</script>

</body>

</html>