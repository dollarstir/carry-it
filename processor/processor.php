<?php

require '../loader/autoloader.php';
require '../fragement/stafffunctions.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addpackage':
            extract($_POST);
            addpackage($item, $status, $origin, $current, $destination);
            break;

        default:

        break;
    }
}
