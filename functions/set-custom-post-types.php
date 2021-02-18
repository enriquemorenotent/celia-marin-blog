<?php

function set_custom_post_types()
{
    register_post_type("work", [
        "labels" => [
            "name" => "Trabajos",
            "singular_name" => "Trabajo",
            "menu_name" => "Trabajos"
        ],
        "public" => true,
        "capability_type" => "post",
        "has_archive" => true,
        "show_in_rest" => true,
        'supports' => ['title', 'editor',  'excerpt', 'thumbnail'],
        "rewrite" => [
            "slug" => "trabajos"
        ]
    ]);
}

add_action("init", "set_custom_post_types");