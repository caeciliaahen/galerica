<?php
include '../model.php';
$isiJumlahData = getJumlahData();
$isiJumlahHalaman = getJumlahHalaman($isiJumlahData);
$isiHalamanAktif = getHalamanAktif();
$isiAwalData = getAwalData($isiHalamanAktif);
$isiPakaianWanita = getPakaianWanita($isiAwalData);
include '../view/galerica-pakaian-wanita.php';