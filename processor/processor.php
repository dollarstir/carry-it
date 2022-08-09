<?php

require '../loader/autoloader.php';
require '../fragement/stafffunctions.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addpackage':
            extract($_POST);
            addpackage($item, $status, $origin, $current, $destination);
            break;

        case 'editpackage':
            extract($_POST);
            editpackage($id, $item, $status, $origin, $current, $destination);
            break;
        case 'login':
            extract($_POST);
            login($username, $password);
            break;
        default:

        break;
    }
}
