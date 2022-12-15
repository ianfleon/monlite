function hapus_user(kode)
{
    // console.log(kode);
    if(confirm("Hapus voucher: ( " + kode +  " ) ?")) {
        window.location = "/dashboard.php?layout=pengguna&hapus=" + kode;
    }
}