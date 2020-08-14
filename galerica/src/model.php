<?php
function conn(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "galerica";
    return mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
}

function getPakaian(){
    $link = conn();
    $query = "SELECT * FROM pakaian";
    $result = mysqli_query($link, $query);
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}

function getTestimoni(){
    $link = conn();
    $query = "SELECT * FROM testimoni";
    $result = mysqli_query($link, $query);
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}

function getProduk($kodeproduk){
	$link = conn();
	$query = "SELECT * FROM pakaian where no='".$kodeproduk."'";
	$result = mysqli_query($link, $query);
	$hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $hasil;
}

function getJumlahData(){
    $link = conn();
    $pakaianWanita = mysqli_query($link, "SELECT * FROM pakaian where koleksi='Pakaian Wanita'");
    $jumlahData = mysqli_num_rows($pakaianWanita);
    return $jumlahData;
}

function getJumlahData2(){
    $link = conn();
    $pakaianPria = mysqli_query($link, "SELECT * FROM pakaian WHERE koleksi='Pakaian Pria'");
    $jumlahData = mysqli_num_rows($pakaianPria);
    return $jumlahData;
}

function getJumlahData3($keyword){
    $link = conn();
    $searchPakaianWanita = mysqli_query($link, "SELECT * FROM pakaian where koleksi='Pakaian Wanita' and nama like '%$keyword' or koleksi='Pakaian Wanita' and nama like '%$keyword%' or koleksi='Pakaian Wanita' and nama like'$keyword%'
    or koleksi='Pakaian Wanita' and jenis like '%$keyword' or koleksi='Pakaian Wanita' and jenis like '%$keyword%' or koleksi='Pakaian Wanita' and jenis like'$keyword%'");
    $jumlahData = mysqli_num_rows($searchPakaianWanita);
    return $jumlahData;
}

function getJumlahData4($keyword){
    $link = conn();
    $searchPakaianPria = mysqli_query($link, "SELECT * FROM pakaian where koleksi='Pakaian Pria' and nama like '%$keyword' or koleksi='Pakaian Pria' and nama like '%$keyword%' or koleksi='Pakaian Pria' and nama like'$keyword%'
    or koleksi='Pakaian Pria' and jenis like '%$keyword' or koleksi='Pakaian Pria' and jenis like '%$keyword%' or koleksi='Pakaian Pria' and jenis like'$keyword%'");
    $jumlahData = mysqli_num_rows($searchPakaianPria);
    return $jumlahData;
}

function getJumlahHalaman($jumlahData){
    $jumlahHalaman = ceil($jumlahData/12);
    return $jumlahHalaman;
}

function getHalamanAktif(){
    $link = conn();
    $halamanAktif = (isset($_GET["page"]))?$_GET["page"]:1;
    return $halamanAktif;
}

function getAwalData($aktif){
    $link = conn();
    $awalData = (12*($aktif-1));
    return $awalData;
}

function getPakaianWanita($awal){
    $link = conn();
    $query = "SELECT * FROM pakaian where koleksi='Pakaian Wanita' LIMIT $awal, 12";
    $result = mysqli_query($link, $query);
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}

function getPakaianPria($awal){
    $link = conn();
    $query = "SELECT * FROM pakaian where koleksi='Pakaian Pria'  LIMIT $awal, 12";
    $result = mysqli_query($link, $query);
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}

function getSearchPakaianWanita($keyword){
	$link = conn();
	$query = "SELECT * FROM pakaian where koleksi='Pakaian Wanita' and nama like '%$keyword' or koleksi='Pakaian Wanita' and nama like '%$keyword%' or koleksi='Pakaian Wanita' and nama like'$keyword%'
	or koleksi='Pakaian Wanita' and jenis like '%$keyword' or koleksi='Pakaian Wanita' and jenis like '%$keyword%' or koleksi='Pakaian Wanita' and jenis like'$keyword%'";
	$result = mysqli_query($link, $query);
	$hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$num = count($hasil);
	if ($num==0) {
		$hasil = 'Not Found';
		return $hasil;
	}
	else{
		return $hasil;
	}
	
}

function getSearchPakaianPria($keyword){
	$link = conn();
	$query = "SELECT * FROM pakaian where koleksi='Pakaian Pria' and nama like '%$keyword' or koleksi='Pakaian Pria' and nama like '%$keyword%' or koleksi='Pakaian Pria' and nama like'$keyword%'
	or koleksi='Pakaian Pria' and jenis like '%$keyword' or koleksi='Pakaian Pria' and jenis like '%$keyword%' or koleksi='Pakaian Pria' and jenis like'$keyword%'";
	$result = mysqli_query($link, $query);
	$hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$num = count($hasil);
	if ($num==0) {
		$hasil = 'Not Found';
		return $hasil;
	}
	else{
		return $hasil;
	}
	
}

function getTokoOffline(){
    $link = conn();
    $query = "SELECT * FROM toko_offline";
    $result = mysqli_query($link, $query);
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}

function getTokoOnline(){
    $link = conn();
    $query = "SELECT * FROM toko_online";
    $result = mysqli_query($link, $query);
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}