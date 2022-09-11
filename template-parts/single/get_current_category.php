<?php
$categories = get_the_category();
$separator = "&nbsp;&nbsp;";
$output = '';

if ($categories) {
    foreach ($categories as $category) {
        $output .= '<a href="' . get_category_link($category->term_id) . '"><div class="box-categoria">' . $category->cat_name . '</div></a>'  . $separator;
    }
    echo trim($output, $separator);
}
