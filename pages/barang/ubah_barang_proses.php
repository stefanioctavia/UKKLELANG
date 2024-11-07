<?php
include "../../conf/conn.php";
if($_POST)
{
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$tgl = $_POST['tgl'];
$harga_awal = $_POST['harga_awal'];
$deskripsi_barang = $_POST['deskripsi_barang'];
$foto = $_FILES['foto'] ['name'];
//cek dulu jika merubah gambar produk jalankan coding ini
if($foto != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                move_uploaded_file($file_tmp, '../foto/'.$nama_gambar_baru); 
                //move_uploaded_file($file_tmp, '../foto/'.$nama_gambar_baru);
$query = ("UPDATE barang SET nama_barang='$nama_barang',tgl='$tgl',harga_awal='$harga_awal',
deskripsi_barang='$deskripsi_barang',foto='$nama_gambar_baru' WHERE id_barang ='$id'");
echo $query;

if(!mysqli_query($koneksi,"$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_barang"</script>';
}

}
}
}

?>