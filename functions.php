<?php

function registerNav(){
    register_nav_menus([
        'main-nav' => __('Main Nav')
    ]);
}

add_action('init', 'registerNav');