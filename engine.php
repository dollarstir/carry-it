<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('front/index.php', $context);
        }
    ),
]);
$router->launch();
