<?php

$alluser = $Monlite->get_midahotspot_users();

foreach ($alluser as $user) {
    if ($user['uptime'] == $user['limit-uptime']) {
        $Monlite->delete_user_by_id($user['.id']);
    }
    
}

echo '<meta http-equiv="refresh" content="1; URL=/dashboard.php?layout=pengguna" />';