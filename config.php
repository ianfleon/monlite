<?php

/* RouterOS Super-User Configuration */

/* Host and Account (SU) */
$ROS_HOST_CONFIG['IP'] = '10.10.10.1';
$ROS_HOST_CONFIG['USER'] = 'admin';
$ROS_HOST_CONFIG['PASSWORD'] = encrypt('zeroeight');

define('ROS_HOST_IP', $ROS_HOST_CONFIG['IP']);
define('ROS_HOST_USER',$ROS_HOST_CONFIG['USER']);
define('ROS_HOST_PASSWORD',$ROS_HOST_CONFIG['PASSWORD']);

/* Hotspot */
$ROS_HOTSPOT_CONFIG['SERVER_NAME'] = 'midahotspot';

define('ROS_HOTSPOT_SERVERNAME', $ROS_HOTSPOT_CONFIG['SERVER_NAME']);