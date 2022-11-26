<?php

require '../loader/autoloader.php';
require '../fragement/stafffunctions.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addpackage':
            extract($_POST);
            addpackage($item, $status, $origin, $current, $destination, $pickupdate, $edeliverydate, $departuretime, $weight, $shippername, $shipperaddress, $recievername, $recieveraddress, $paymode, $shipmode, $remarks);
            break;

        case 'editpackage':
            extract($_POST);
            editpackage($id, $item, $status, $origin, $current, $destination, $pickupdate, $edeliverydate, $departuretime, $weight, $shippername, $shipperaddress, $recievername, $recieveraddress, $paymode, $shipmode, $remarks, $trackid);
            break;
        case 'login':
            extract($_POST);
            login($email, $password);
            break;
        default:

        break;
    }
}
