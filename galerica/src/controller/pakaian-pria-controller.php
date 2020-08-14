<?php
include '../model.php';
$isiJumlahData2 = getJumlahData2();
$isiJumlahHalaman = getJumlahHalaman($isiJumlahData2);
$isiHalamanAktif = getHalamanAktif();
$isiAwalData = getAwalData($isiHalamanAktif);
$isiPakaianPria = getPakaianPria($isiAwalData);
include '../view/galerica-pakaian-pria.php';