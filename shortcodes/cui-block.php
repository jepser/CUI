<?php

function cuiBlock($atts, $content = null)
{
    $options = shortcode_atts([
        'id' => 0,
    ], $atts);

    extract($options);

    if ($content) {
        $content = preg_replace("#<br />#", '', do_shortcode($content));
    }

    ob_start();
    CUIUtils::loadFile('templates/cui-block.php', false);
    return ob_get_clean();

}
add_shortcode('cui-block', 'cuiBlock');
