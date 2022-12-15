<?php

require_once('..\koneksi.php');

$server_list = $API->comm("/ip/hotspot/print");

var_dump($server_list);