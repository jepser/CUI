<?php

function cuiInteraction($atts, $content = null) {
    $options = shortcode_atts( [
        'id' => 0,
        'bar' => 'something else',
    ], $atts );

    extract($options);

    

}
add_shortcode('cui-interaction', 'cuiInteraction');
