<?php
require 'Laundry.php';

$koneksi = new mysqli("localhost", "root", "", "toko_laundry_db");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_user = $_POST['nama_user'];

   
    if (isset($_POST['jenis_laundry'])) {
        if (is_array($_POST['jenis_laundry'])) {
            $jenis_laundry = implode(",", $_POST['jenis_laundry']);
        } else {
            $jenis_laundry = $_POST['jenis_laundry']; 
        }
    } else {
        $jenis_laundry = '';
    }

    $isian_laundry = $_POST['isian_laundry'] ?? '';

    $karakteristik_laundry = $_POST['karakteristik_laundry'] ?? '';
    $keterangan_laundry = $_POST['keterangan_laundry'] ?? '';
    $password = $_POST['password'] ?? '';

    $laundry = new Laundry(
        $nama_user,
        $jenis_laundry,
        $isian_laundry,
        $karakteristik_laundry,
        $keterangan_laundry,
        $password
    );

    $stmt = $koneksi->prepare("INSERT INTO laundry 
        (nama_user, jenis_laundry, isian_laundry, karakteristik_laundry, keterangan_laundry, password) 
        VALUES (?, ?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "ssssss",
        $laundry->nama_user,
        $laundry->jenis_laundry,
        $laundry->isian_laundry,
        $laundry->karakteristik_laundry,
        $laundry->keterangan_laundry,
        $laundry->password
    );

    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$koneksi->close();
?>
