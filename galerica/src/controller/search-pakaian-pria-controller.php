<?php
if (isset($_POST["searchButton"])){
	$search=$_POST["searchBar"];
}
include '../model.php';
$isiJumlahData4 = getJumlahData4($search);
$isiSearchPakaianPria = getSearchPakaianPria($search);
include '../view/galerica-search-pakaian-pria.php';