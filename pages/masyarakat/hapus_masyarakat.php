<?php
include "../../conf/conn.php";
$id_user = $_GET['id_user'];
$query = ("DELETE FROM masyarakat WHERE id_user ='$id_user'");
//echo $query;

if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="../../index.php?page=data_masyarakat"</script>';
}
?>