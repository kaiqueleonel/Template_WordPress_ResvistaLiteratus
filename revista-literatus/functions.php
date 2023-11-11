<?php

function revista_literatus_adicionando_recursos_ao_tema()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'revista_literatus_adicionando_recursos_ao_tema');
function revista_literatus_registrando_menu()
{
    register_nav_menu('menu-navegacao', 'Menu Navegação');
}

add_action('init', 'revista_literatus_registrando_menu');

function revists_literatus_registrando_participantes()
{
    register_post_type(
        'participantes',
        array(
            'labels' => array('name' => 'Participantes'),
            'public' => true,
            'menu_position' => 1,
            'supports' => array('title', 'editor', 'thumbnail',),
        )
    );
}

add_action('init', 'revists_literatus_registrando_participantes');


function revista_literatus_registrando_taxonomia()
{
    register_taxonomy(
        'tag_participantes',
        'participantes',
        array(
                'labels'=> array('name'=>'Tag Participantes'),
        )
    );
}

add_action('init', 'revista_literatus_registrando_taxonomia');
