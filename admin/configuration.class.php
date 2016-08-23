<?php

class CUIConfiguration
{
    public static function registerHooks()
    {
        add_action('admin_menu', ['CUIConfiguration', 'adminMenuItem']);

    }
    public static function adminMenuItem()
    {
        add_menu_page(
            __('CUI', 'cui'),
            __('CUI', 'cui'),
            'manage_options',
            'cui',
            ['CUIConfiguration', 'settingsPage'],
            'dashicons-microphone',
            100
        );
    }

    public static function settingsPage()
    {
        esc_html_e('Admin Page Test', 'cui');
    }

    public static function loadDefaultShortcodes()
    {
        foreach (self::$files as $file) {
            CUIUtils::loadFile($file);
        }
    }

    public static function registerShortcodes()
    {
        $cuiShortcodes = apply_filters('cui/shortcodes');
        foreach ($cuiShortcodes as $shortcode) {
        }
        // $cuiShortcodes = apply_filters('cui/fields/type');
    }
}
