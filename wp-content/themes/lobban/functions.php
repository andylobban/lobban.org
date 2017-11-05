<?php

add_theme_support( 'title-tag' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator');
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action( 'wp_head', 'rel_canonical');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'index_rel_link');
remove_action( 'wp_head', 'parent_post_rel_link');
remove_action( 'wp_head', 'start_post_rel_link');
remove_action( 'wp_head', 'adjacent_posts_rel_link');
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'feed_links_extra', 3);
remove_action( 'wp_head', 'feed_links', 2);

add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
function my_deregister_styles() {
wp_deregister_style( 'cleaner-gallery' );
wp_deregister_style('jetpack_css');
wp_deregister_script('devicepx');
}

add_filter('get_the_archive_title', function ($title) {
    return preg_replace('/^\w+: /', '', $title);
});