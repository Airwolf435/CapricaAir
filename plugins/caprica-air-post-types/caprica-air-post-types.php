<?php
/*
 * Plugin Name: Caprica Air Post Types
 */

function caprica_air_custom_post_stype(){
    register_post_type('capricaair_events', [
        "labels" => [
            "name" => "events",
            "singular_name" => "event"
        ],
        "public" => true,
        "has_archive" => true,
    ]
	);
}