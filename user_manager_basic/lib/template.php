<?php

function get_header() {
    $path_header = "inc/header.php";
    if(file_exists($path_header)) {
        require $path_header;
    }
}

function get_footer() {
    $path_footer = "inc/footer.php";
    if(file_exists($path_footer)) {
        require $path_footer;
    }
}

function get_404() {
    $path = "inc/404.php";
    if(file_exists($path)) {
        require $path;
    }
}

