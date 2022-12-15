<?php

// echo 'Monlite v0.0 (Development)\n' . PHP_EOL;

require_once('lib/routeros_api.class.php');
// include_once('./lib/formatbytesbites.php');

/* RouterOS Account */
define('IP_HOST', '10.10.10.1');
define('USER_HOST', 'ian');
define('PW_HOST', encrypt('zeroeight'));

$API = new RouterosAPI(); // RouterOS API
// $API->debug = true;

// connect ke RouterOS
$conn = $API->connect(IP_HOST, USER_HOST, decrypt(PW_HOST));

// if (!$conn) {
//     echo "Monlite [ERORR] : Gagal menghubungkan ke Mikrotik.";
// } else {
//     echo "Monlite [BERHASIL] : Selamat datang!";
// }