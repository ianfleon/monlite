<?php

$totaluser = 0;

$users_active = $Monlite->user_active();

?>

<div class="container">

    <div class="card-wrapper">

        <!-- Card Users -->
        <?php foreach ($users_active as $k => $user) : ?>
            <?php if ($user['user'] != 'admin') : ?>
                <?php $totaluser++ ?>
                <div class="card mb-4">
                    <div class="mr-auto">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="teal" width="24px" class="mr-2" viewBox="0 0 32 32">
                                <path d="M30,4H6A2,2,0,0,0,4,6V8H2a2,2,0,0,0-2,2V26a2,2,0,0,0,2,2H26a2,2,0,0,0,2-2V24h2a2,2,0,0,0,2-2V6A2,2,0,0,0,30,4ZM26,26H2V10H26Zm4-4H28V10a2,2,0,0,0-2-2H6V6H30Z" />
                                <path d="M14,24a6,6,0,1,0-6-6A6,6,0,0,0,14,24Zm0-10a4,4,0,1,1-4,4A4,4,0,0,1,14,14Z" />
                                <rect x="22" y="17" width="2" height="2" />
                                <rect x="4" y="17" width="2" height="2" />
                                </g>
                            </svg>
                            <h2 class="mb-2"><?= $user['user']; ?></h2>
                        </div>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#2c88a4" width="12px" viewBox="0 0 32 32">
                                <path d="M2,18a12,12,0,0,1,23.08-4.62l1.85-.77A14,14,0,0,0,16,4.15V2h1a2,2,0,0,0,2-2L11,.06A.26.26,0,0,1,11,0H9a2,2,0,0,0,2,2h1V4.16A14,14,0,0,0,14,32V30A12,12,0,0,1,2,18Z" />
                                <path d="M15,11H13v7a1,1,0,0,0,.29.71l1,1,1.41-1.41L15,17.59Z" />
                                <path d="M24,16a8,8,0,1,0,8,8A8,8,0,0,0,24,16Zm0,14a6,6,0,1,1,6-6A6,6,0,0,1,24,30Z" />
                                <path d="M25,21H23v3a1,1,0,0,0,1,1h3V23H25Z" />
                                </g>
                            </svg>
                            On: <i><?= $user['uptime']; ?></i>
                        </p>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="btn btn-danger" onclick="hapus_user()">Hapus</a>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>

    <?php if ($totaluser < 1) : ?>
        <div class="text-center">
            <img src="svg/nouser.svg" width="100%" alt=""/>
            <p>Tidak ada pengguna yang aktif.</p>
        </div>
    <?php endif; ?>

</div>