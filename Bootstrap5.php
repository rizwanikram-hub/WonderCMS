<?php

function bootstrap5_init($args) {
    // Linking to Bootstrap 5's CDN
    $bootstrapCSS = 'https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css';
    $bootstrapJS = 'https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js';

    $args[0] .= <<<HTML
<link rel="stylesheet" href="{$bootstrapCSS}">
<script src="{$bootstrapJS}"></script>
HTML;

    return $args;
}

global $Wcms;

$Wcms->addListener('css', 'bootstrap5_init');
