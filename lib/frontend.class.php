<?php

class CUIFrontend
{
    public static function registerDependencies()
    {
        add_action('wp_enqueue_scripts', ['CUIFrontend', 'registerScripts']);
    }
    public static function registerScripts()
    {
        wp_enqueue_script('cui/vuejs', 'https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js');
        wp_enqueue_script('cui/app', CUIUtils::getAssetUrl('js/app.js'));
    }
    public static function registerStyles()
    {
    }
}

CUIFrontend::registerDependencies();
