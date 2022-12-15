<?php

require_once('lib/routeros_api.class.php');
require_once('config.php');
require_once('Monlite.php');

$RouterOS = new RouterosAPI();

if (!$RouterOS->connect(ROS_HOST_IP, ROS_HOST_USER, decrypt(ROS_HOST_PASSWORD))) {
    echo 'false';
} else {
    echo 'true';
}
