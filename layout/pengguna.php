<?php

$myusers = array();
$option_vc_active = 'all';

if (isset($_GET['hapus'])) {

    $result = $Monlite->get_user_by_name($_GET['hapus']);

    if (count($result) > 0) {
        $Monlite->delete_user_by_id($result[0]['.id']);
    } else {
        echo '<meta http-equiv="refresh" content="1; URL=/dashboard.php?layout=pengguna" />';
    }
}

$users = $Monlite->get_midahotspot_users();
$myusers = $users;

if (isset($_GET['vc'])) {
    $vc = $_GET['vc'];
    $option_vc_active = $vc;
    if ($vc != 'all') {
        $myusers = $Monlite->get_users_by('comment', $vc); 
    }
}

$voucher_type = [];

foreach ($users as $key => $user) {
    $voucher_type[$user['comment']] = $user['comment'];
}

?>

<div class="container">
    
    <div class="card-wrapper">

        <form action="" method="GET">
            <input type="hidden" name="layout" value="pengguna"/>
            <div class="input-group mb-4">
                <div class="row">
                    <select name="vc" id="vc" class="form-control w-70">
                        <option value="all">-- Semua Voucher --</option>
                        <?php foreach ($voucher_type as $vc) : ?>
                            <option value="<?= $vc; ?>" <?= ($vc == $option_vc_active) ? 'selected' : ''; ?>><?= $vc; ?>JAM</option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="btn btn-biru w-25 ml-auto">Cari</button>
                </div>
            </div>
        </form>

        <!-- Card Users -->
        <?php foreach ($myusers as $user) : ?>
            <div class="card mb-4 <?php if ($user['uptime'] == $user['limit-uptime']) {
                                        echo 'card-exp';
                                    } elseif ($user['uptime'] == '0s') {
                                        echo 'card-active';
                                    } else {
                                        echo 'card-warning';
                                    } ?>">
                <div class="mr-auto">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="teal" width="24px" class="mr-2" viewBox="0 0 32 32">
                            <path d="M30,4H6A2,2,0,0,0,4,6V8H2a2,2,0,0,0-2,2V26a2,2,0,0,0,2,2H26a2,2,0,0,0,2-2V24h2a2,2,0,0,0,2-2V6A2,2,0,0,0,30,4ZM26,26H2V10H26Zm4-4H28V10a2,2,0,0,0-2-2H6V6H30Z" />
                            <path d="M14,24a6,6,0,1,0-6-6A6,6,0,0,0,14,24Zm0-10a4,4,0,1,1-4,4A4,4,0,0,1,14,14Z" />
                            <rect x="22" y="17" width="2" height="2" />
                            <rect x="4" y="17" width="2" height="2" />
                            </g>
                        </svg>
                        <h2 class="mb-2"><?= $user['name']; ?></h2>
                    </div>
                    <p class="text-muted mb-4">
                        <?php
                        $w = explode('-', $user['name']);
                        echo 'PAKET ' . $w[0] . '-JAM';
                        ?>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#2c88a4" width="12px" viewBox="0 0 32 32">
                            <path d="M2,18a12,12,0,0,1,23.08-4.62l1.85-.77A14,14,0,0,0,16,4.15V2h1a2,2,0,0,0,2-2L11,.06A.26.26,0,0,1,11,0H9a2,2,0,0,0,2,2h1V4.16A14,14,0,0,0,14,32V30A12,12,0,0,1,2,18Z" />
                            <path d="M15,11H13v7a1,1,0,0,0,.29.71l1,1,1.41-1.41L15,17.59Z" />
                            <path d="M24,16a8,8,0,1,0,8,8A8,8,0,0,0,24,16Zm0,14a6,6,0,1,1,6-6A6,6,0,0,1,24,30Z" />
                            <path d="M25,21H23v3a1,1,0,0,0,1,1h3V23H25Z" />
                            </g>
                        </svg>
                        <i><?= $user['uptime']; ?> / <?= $user['limit-uptime']; ?></i>
                    </p>
                </div>
                <div class="ml-auto">
                    <a href="#" class="btn btn-danger" onclick="hapus_user('<?= $user['name']; ?>')">Hapus</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>