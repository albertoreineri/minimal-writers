<?php

if (is_category()) {
    single_cat_title();
} elseif (is_tag()) {
    single_tag_title();
} elseif (is_author()) {
    the_post();
    echo esc_html__('Author: ', 'minimal-writers') . get_the_author();
    rewind_posts();
} elseif (is_day()) {
    echo esc_html__('Daily Archive: ', 'minimal-writers') .  get_the_date();
} elseif (is_month()) {
    echo esc_html__('Monthly Archive: ', 'minimal-writers') . get_the_date('F Y');
} elseif (is_year()) {
    echo esc_html__('Annual Archive: ', 'minimal-writers') . get_the_date('Y');
} elseif (is_post_type_archive()) {
    echo ucfirst(get_post_type($post->ID));
} else {
    echo 'Archive:';
}
