<?php
if (isset($_POST["searchButton"])){
	$search=$_POST["searchBar"];
}
include '../model.php';
$isiJumlahData3 = getJumlahData3($search);
$isiSearchPakaianWanita = getSearchPakaianWanita($search);
include '../view/galerica-search-pakaian-wanita.php';