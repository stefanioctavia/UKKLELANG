<?php
include "../../conf/conn.php";
if($_POST)
{
    
    
$nama_barang = $_POST['nama_barang'];
$tgl = $_POST['tgl'];
$harga_awal = $_POST['harga_awal'];
$deskripsi_barang = $_POST['deskripsi_barang'];
//$foto = $_POST['foto']['name'];
$foto = $_FILES['gambar_produk']['name'];


if($foto != "") {
    
    $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_produk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
    
          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {   
            //echo $foto;  
                  move_uploaded_file($file_tmp, '../foto/'.$nama_gambar_baru);
$query = ("INSERT INTO barang (nama_barang,tgl,harga_awal,deskripsi_barang,foto) VALUES 
('".$nama_barang."','".$tgl."','".$harga_awal."','".$deskripsi_barang."','".$nama_gambar_baru."')");
echo $query;
        
    

if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="../../index.php?page=data_barang"</script>';
}

}
}

}

?>
