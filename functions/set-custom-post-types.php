<?php

function set_custom_post_types()
{
    // register_post_type("works", [
    //     "labels" => [
    //         "name" => "Trabajos",
    //         "singular_name" => "Trabajo",
    //         "menu_name" => "Trabajos"
    //     ],
    //     "public" => true,
    //     "capability_type" => "post",
    //     "has_archive" => true,
    //     "supports" => ["title, editor"]
    // ]);
}

add_action("init", "set_custom_post_types");