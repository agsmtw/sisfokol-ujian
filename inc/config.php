<?php
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
/////// SISFOKOL-UjianOnline                                    ///////
///////////////////////////////////////////////////////////////////////
/////// Dibuat oleh :                                           ///////
/////// Agus Muhajir, S.Kom                                     ///////
/////// URL 	:                                               ///////
///////     * http://sisfokol.wordpress.com/                    ///////
///////     * http://hajirodeon.wordpress.com/                  ///////
///////     * http://yahoogroup.com/groups/sisfokol/            ///////
///////     * http://yahoogroup.com/groups/linuxbiasawae/       ///////
/////// E-Mail	:                                               ///////
///////     * hajirodeon@yahoo.com                              ///////
///////     * hajirodeon@gmail.com                              ///////
/////// HP/SMS	: 081-829-88-54                                 ///////
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////




//error reporting //////////////////////////////////////////////////////////////////////////////
//matikan
error_reporting(0);

//tampilkan
//error_reporting(E_ALL & ~E_NOTICE);
//error reporting //////////////////////////////////////////////////////////////////////////////





//Detail Sekolah ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sek_nama = "nama...";
$sek_alamat = "Jl. ...";
$sek_kontak = "Telp/Fax. ...";
$sek_kota = "kotanya";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






//KONEKSI DATABASE //////////////////////////////////////////////////////////////////////////////////////////////////////////////
$xhostname = "localhost";
$xdatabase = "sisfokol_ujian";
$xusername = "biasawae";
$xpassword = "biasawae";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//alamat situs ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
$sumber = "http://localhost/karyaku/sisfokol_ujian/";
//alamat situs /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






//JUMLAH DATA per HALAMAN ///////////////////////////////////////////////////////////////////////////////////////////////////////
$limit = "20";  //jumlah data dalam satu halaman
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//KONFIGURASI WARNA TABEL - DATA ////////////////////////////////////////////////////////////////////////////////////////////////
$warna01 = "#d09b28";
$warna02 = "#debba5";
$warnaover = "#ffe29c";
$warnaheader = "#b38f79";
$warnatext = "black";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//Lama-nya session //////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sesidt = 3600; //detik
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
