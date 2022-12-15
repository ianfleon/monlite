<?php

if (isset($_POST['btn_generate'])) {
    
    $jumlah = $_POST['jumlah'];

    if ($jumlah > 10) {
        echo "<script>alert('Maksimal 10 Voucher!')</script>";
        echo '<meta http-equiv="refresh" content="1; URL=/dashboard.php?layout=generate" />';
        exit;
    }

    $data['profile'] = 'PAKETMIDAHS';
    $data['limit_uptime'] = $_POST['batas_jam'] . 'h' . $_POST['batas_menit'] . 'm';
    
    for ($i = 0; $i<$jumlah; $i++) {
        $data['name'] = $_POST['batas_jam'] . '-' . randN(3);
        if (count($Monlite->get_user_by_name($data['name'])) > 0) {
            if ($i != 0) {
                $i--;
            } else {
                $i = 0;
            }
        } else {
            $Monlite->add_user($data);
        }
    }

    echo "<script>alert('Voucher berhasil dibuat!')</script>";
    echo '<meta http-equiv="refresh" content="1; URL=/dashboard.php?layout=pengguna" />';

}

?>

<div class="container mt-4">
    <form action="" method="POST">
        <div class="input-group mb-4">
            <label for="jumlah" class="d-block mb-4 form-label fs-bold">Jumlah Voucher</label>
            <input type="number" name="jumlah" class="form-control" required />
        </div>
        <div class="input-group mb-4">
            <label for="batas" class="d-block mb-4 fs-bold">Batas Waktu</label>
            <div class="row align-items-center">
                <input type="number" name="batas_jam" class="form-control w-40 mr-4" required />
                <p>Jam</p>
            </div>
        </div>
        <div class="input-group mb-4">
            <div class="row align-items-center">
                <input type="number" name="batas_menit" class="form-control w-40 mr-4" required />
                <p>Menit</p>
            </div>
        </div>
        <button type="submit" name="btn_generate" class="btn btn-biru">Simpan</button>
    </form>
</div>