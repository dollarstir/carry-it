<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('front/index.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('front/index.php', $context);
        }
    ),

    new Route(
        '/about',
        function ($context) {
            return Viewer::view('front/about.php', $context);
        }
    ),

    new Route(
        '/contact',
        function ($context) {
            return Viewer::view('front/contact.php', $context);
        }
    ),
]);
$router->launch();
