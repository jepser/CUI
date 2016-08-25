<?php

class CUIFrontend
{
    public static function registerDependencies()
    {
        add_action('wp_enqueue_scripts', ['CUIFrontend', 'registerScripts']);
        add_action('wp_enqueue_scripts', ['CUIFrontend', 'registerStyles']);
    }
    public static function registerScripts()
    {
        wp_enqueue_script('cui/vuejs', 'https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js');
        wp_enqueue_script('cui/font/avenir', 'https://fast.fonts.net/jsapi/6915cd0f-6232-45f4-ba0e-01f23e4e8215.js');
        wp_enqueue_script('cui/app', CUIUtils::getAssetUrl('js/app.js'));
    }
    public static function registerStyles()
    {
        wp_enqueue_style('cui/app', CUIUtils::getAssetUrl('styles/app.css'));
        wp_enqueue_style('cui/font/merriweather', 'https://fonts.googleapis.com/css?family=Merriweather');
    }
}

CUIFrontend::registerDependencies();
