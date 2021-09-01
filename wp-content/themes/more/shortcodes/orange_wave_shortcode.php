<?php

add_shortcode('orange_wave', 'orange_wave_func');

function orange_wave_func($atts) {
    $title = $atts['title'];

    $out = '
        <div class="orange-wave text-center">
            <h2>'.$title.'</h2>
        </div>
    ';

    return $out;
}