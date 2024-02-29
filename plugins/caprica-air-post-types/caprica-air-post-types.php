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
        "supports" => ['title', 'editor', 'revisions', 'author', 'excerpt'],
        "rewrite" => [
            "slug" => "events"
        ]
    ]
	);
}

add_action('init', 'caprica_air_custom_posts_type');

function caprica_air_rewrite_flush(){
    caprica_air_custom_posts_type();
    flush_rewrite_rules();
}
add_action( 'init', 'caprica_air_rewrite_flush' );
