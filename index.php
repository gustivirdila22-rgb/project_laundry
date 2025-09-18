<?php
require 'Form.php';

$form = new Form("AksiLaundry.php", "post");
$form->addText("nama_user", "Nama User");
$form->addRadio("jenis_laundry", ["Kiloan"=>"Kiloan", "Satuan"=>"Satuan", "Express"=>"Express"]);
$form->addCheckbox("isian_laundry", ["Cuci"=>"Cuci", "Setrika"=>"Setrika"]);
$form->addDropdown("karakteristik_laundry", ["Biasa"=>"Biasa", "Premium"=>"Premium", "Super"=>"Super"]);
$form->addTextarea("keterangan_laundry", "Keterangan Laundry");
$form->addPassword("password", "Password");
$form->addSubmit("Simpan");

echo $form->render();
?>
