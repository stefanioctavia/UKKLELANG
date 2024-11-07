<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_masyarakat':
    include 'pages/masyarakat/data_masyarakat.php';
    break;
  case 'tambah_masyarakat':
    include 'pages/masyarakat/tambah_masyarakat.php';
    break;
  case 'ubah_masyarakat';
    include 'pages/masyarakat/ubah_masyarakat.php';
    break;

  
    case 'data_petugas':
      include 'pages/petugas/data_petugas.php';
      break;
    case 'tambah_petugas':
      include 'pages/petugas/tambah_petugas.php';
      break;
    case 'ubah_petugas';
      include 'pages/petugas/ubah_petugas.php';
      break;  


      case 'data_barang';
        include 'pages/barang/transaksi_barang.php';
        break;
      case 'tambah_barang':
        include 'pages/barang/tambah_barang.php';
        break;
      case 'ubah_barang';
        include 'pages/barang/ubah_barang.php';
        break;  
  }
}else{
    include "pages/beranda.php";
  }
  ?>