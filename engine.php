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

    new Route(
        '/services',
        function ($context) {
            return Viewer::view('front/services.php', $context);
        }
    ),

    // admin side

    new Route(
        '/manager',
        function ($context) {
            return Viewer::view('back/index.php', $context);
        }
    ),

    new Route(
        '/newpackage',
        function ($context) {
            return Viewer::view('back/addpackage.php', $context);
        }
    ),
    new Route(
        '/packages',
        function ($context) {
            return Viewer::view('back/viewpackage.php', $context);
        }
    ),

    new Route(
        '/editpackage',
        function ($context) {
            return Viewer::view('back/editp.php', $context);
        }
    ),
]);
$router->launch();
