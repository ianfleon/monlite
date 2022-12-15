<?php

/* Monlite v0.0 (Development/26082022) */

require_once('lib/routeros_api.class.php'); // RouterOSAPI
require_once('config.php'); // RouterOS SU Configuration.

class Monlite {

    private $ROS_API;

    public function __construct()
    {
        $this->ROS_API = new RouterosAPI(); // RouterOS API
        // $this->ROS_API->debug = true;

        // Koneksi ke RouterOS
        $conn = $this->ROS_API->connect(ROS_HOST_IP, ROS_HOST_USER, decrypt(ROS_HOST_PASSWORD));
        
        if (!$conn) {
            echo "<script>window.location='/index.php?layout=noconnection'</script>";
        }
    }

    public function delete_user_by_id($id)
    {
        return $this->ROS_API->comm('/ip/hotspot/user/remove', ['.id' => $id]);
    }

    /* Nama Mikrotik :String */
    public function indentity()
    {
        return $this->ROS_API->comm('/system/identity/print')[0]['name'];
    }

    /* Daftar Pengguna (User) :Array */
    public function user_list() {
        return $this->ROS_API->comm('/ip/hotspot/user/print');
    }

    public function get_user_by_id() {
        return $this->ROS_API->comm('/ip/hotspot/user/print', ['?.id' => '*CD']);
        // return $this->ROS_API->comm('/ip/hotspot/user/print', ['?.id' => '*CD'])[0];
    }

    public function get_midahotspot_users() {
        return $this->ROS_API->comm('/ip/hotspot/user/print', ['?profile' => 'PAKETMIDAHS']);
    }
    
    public function get_user_by_name($name)
    {
        $result = $this->ROS_API->comm('/ip/hotspot/user/print', ['?name' => $name]);
        return $result;
    }

    public function get_users_by($i, $v)
    {
        $result = $this->ROS_API->comm('/ip/hotspot/user/print', ['?'. $i => $v]);
        return $result;
    }

    public function user_active() {
        return $this->ROS_API->comm('/ip/hotspot/active/print');
    }

    /* Total User :String */
    public function totalUser() {
         return $this->ROS_API->comm('/ip/hotspot/user/print', array(
            'count-only' => ''
        ));
    }

    public function add_user($data = null) {

        $hasil = $this->ROS_API->comm('/ip/hotspot/user/add', array(
            'server' => ROS_HOTSPOT_SERVERNAME,
            'name' => $data['name'],
            'password' => $data['name'],
            'profile' => $data['profile'],
            'limit-uptime' => $data['limit_uptime'],
            'comment' => $data['comment']
        ));

    }

    public function getUserByName($nama) {
        return $this->ROS_API->comm('/ip/hotspot/user/print', array(
            '?name' => '$nama',
        ));
    }

    /* Daftar Server Hotspot :Array */
    public function getServerList() {
        return $this->ROS_API->comm('/ip/hotspot/print');
    }

    /* Daftar User Profile :Array */
    public function get_profile_list() {
        $profiles = $this->ROS_API->comm('/ip/hotspot/user/profile/print');
        unset($profiles[0]);

        return $profiles;
    }

}