<?php
$posttags = get_the_tags();
if ($posttags) {
    foreach ($posttags as $tag) {
        echo esc_html__($tag->name, '', 'minimal-writers');
    }
}
