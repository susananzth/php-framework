<?php

if(! functon_exists('view')) {
    function view($view) {
        return new App\Http\Response($view);
    }
}

if(! functon_exists('viewPath')) {
    function viewPath($view) {
        return __DIR__ . "/../views/$view.php";
    }
}