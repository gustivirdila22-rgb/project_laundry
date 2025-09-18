<?php
class Laundry {
    public $nama_user;
    public $jenis_laundry;
    public $isian_laundry;
    public $karakteristik_laundry;
    public $keterangan_laundry;
    public $password;

    function __construct($nama_user, $jenis_laundry, $isian_laundry, $karakteristik_laundry, $keterangan_laundry, $password) {
        $this->nama_user = $nama_user;
        $this->jenis_laundry = $jenis_laundry;
        $this->isian_laundry = $isian_laundry;
        $this->karakteristik_laundry = $karakteristik_laundry;
        $this->keterangan_laundry = $keterangan_laundry;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
}
?>