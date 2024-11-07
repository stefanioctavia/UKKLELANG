<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA MASYARAKAT
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA MASAYARAKAT</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_masyarakat" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
          </div>
            <div class="box-body table-responsive">
              <table id="masyarakat" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA LENGKAP</th>
                  <th>USERNAME</th>
                  <th>PASSWORD</th>
                  <th>TELP</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $no=0;
                $query=mysqli_query($koneksi,"SELECT * FROM masyarakat ORDER BY id_user DESC")
                or die(mysqli_error($koneksi));
                while ($row=mysqli_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['nama_lengkap'];?></td>
                  <td><?php echo $row['username'];?></td>
                  <td><?php echo $row['password'];?></td>
                  <td><?php echo $row['telp'];?></td>
                  
                  <td>
                    <a href="index.php?page=ubah_masyarakat&id=<?=$row['id_user'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-danger" role="button" title="Hapus Data" onclick="hapusmasyarakat(<?=$row['id_user'];?>);"><i class="glyphicon glyphicon-trash"></i></a>
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
    $('#masyarakat').DataTable();
  });

  function hapusmasyarakat(id_user) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      window.location.href = "pages/masyarakat/hapus_masyarakat.php?id_user=" + id_user;
    }
  }
</script>

