<?php

function console_log( $data ) {
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}


function dd($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";

    die();
}


function dump($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}