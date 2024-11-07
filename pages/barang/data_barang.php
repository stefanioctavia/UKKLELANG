<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA BARANG
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA BARANG</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_barang" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
            <div class="box-body table-responsive">
              <table id="barang" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>NO</th>
                <th>NAMA BARANG</th>
                <th>TANGGAL</th>
                <th>HARGA AWAL</th>
                <th>DESKRIPSI BARANG</th>
                <th>FOTO</th>
                <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                <?php
               include "conf/conn.php";
               $no=0;

               $query = mysqli_query($koneksi,"SELECT * FROM barang ORDER BY id_barang DESC");
              
              //  or die (mysqli_error($koneksi)); 
               while ($row=mysqli_fetch_array($query))
               {
              // echo "amamama " . json_encode($row);  
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['nama_barang'];?></td>
                  <td><?php echo $row['tgl'];?></td>
                  <td>Rp <?php echo number_format($row['harga_awal'],0,',','.'); ?></td>
                  <td><?php echo $row['deskripsi_barang'];?></td>
                  <!-- <td><?php echo $row['foto'];?></td> -->
                  <td><img src="pages/foto/<?php echo $row['foto'] ?>" width="150" height="150"></td> 
                
                
                  <td>
                    <a href="index.php?page=ubah_barang&id=<?=$row['id_barang'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/barang/hapus_barang.php?id=<?=$row['id_barang'];?>"onclick="return confirm('Yakin mau hapus data <?php echo $row['nama_barang']?>')"class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                    

                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#barang').DataTable();
  });
</script>