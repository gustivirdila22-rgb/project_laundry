<?php
require 'Form.php';

$form = new Form("AksiLaundry.php", "post");
$form->addText("nama_user", "Nama User");
$form->addCheckbox("jenis_laundry", [
    "Pakaian" => "Pakaian",
    "Selimut" => "Selimut",
    "Alat Ibadah" => "Alat Ibadah",
    "Handuk" => "Handuk",
    "Karpet" => "Karpet",
    "Boneka" => "Boneka",
    "Sprei" => "Sprei",
    "Gorden" => "Gorden"
]);
$form->addRadio("isian_laundry", [
    "Cuci" => "Cuci",
    "Setrika" => "Setrika",
    "Cuci+Setrika" => "Cuci + Setrika"
]);
$form->addDropdown("karakteristik_laundry", [
    "Reguler" => "Reguler",
    "Instan" => "Instan",
    "Super" => "Super"
]);
$form->addTextarea("keterangan_laundry", "Keterangan Laundry");
$form->addPassword("password", "Password");
$form->addSubmit("Simpan");

echo $form->render();
?>
