<?php

class CUIUtils
{
    public static function loadFile($path)
    {
        include_once(CUI_DIR . $path);
    }
}
