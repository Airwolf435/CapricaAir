<?php
/*
 * Plugin Name: Caprica Air Post Types
 */

function caprica_air_custom_posts_type(){
    register_post_type('capricaair_events', [
        "labels" => [
            "name" => "events",
            "singular_name" => "event"
        ],
        "public" => true,
        "has_archive" => true,
        'show_in_rest' => true,
        "supports" => ['title', 'editor', 'revisions', 'author', 'excerpt', 'thumbnail'],
        "rewrite" => [
            "slug" => "events"
        ]
    ]
	);
}

add_action('init', 'caprica_air_custom_posts_type');

// Credit to https://stackoverflow.com/questions/9955513/why-are-my-custom-posts-in-wordpress-not-displaying
// This lead me to the doc page about doing a rewrite flush and it solved the issue with content not loading.
function caprica_air_rewrite_flush(){
    caprica_air_custom_posts_type();
    flush_rewrite_rules();
}
add_action( 'init', 'caprica_air_rewrite_flush' );
