<?php

$alluser = $Monlite->get_midahotspot_users();

foreach ($alluser as $user) {
    if ($user['uptime'] == $user['limit-uptime']) {
        $Monlite->delete_user_by_id($user['.id']);
    }
    
}

echo '<meta http-equiv="refresh" content="3; URL=/dashboard.php?layout=pengguna" />';

?>

<div class="text-center">
    <img src="svg/cleanuser.svg" width="100%" alt=""/>
    <p>Sedang membersihkan voucher expired..</p>
</div>