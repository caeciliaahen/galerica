<?php
$kodeproduk = $_GET['no'];
include '../model.php';
$isiProduk = getProduk($kodeproduk);
include "../view/galerica-produk.php";