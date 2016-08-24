<?php

class CUIUtils
{
    public static function loadFile($path, $once = true)
    {
        if ($once) {
            include_once(CUI_DIR . $path);
        } else {
            include(CUI_DIR . $path);
        }
        
    }

    public static function getAssetUrl($path)
    {
        return CUI_URL . 'dist/' . $path;
    }
}
