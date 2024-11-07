<?php
$query = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='".$_GET['id']."'")
or die(mysqli_error($koneksi));
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH MASYARAKAT
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH PETUGAS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/petugas/ubah_petugas_proses.php">
              <div class="box-body">
                <input type="hidden" name="id_petugas" value="<?php echo $row['id_petugas']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama Petugas</label>
                  <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas" value="<?php echo $row['nama_petugas']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" placeholder="password" value="<?php echo $row['password']; ?>" required>
                </div>
                <div class="form-group">
                  <label>LEVEL</label>
                  <select class="form-control" name="level">
                    <option value="">- Pilih Level -</option>
                    <option value="administrator">ADMINISTRATOR</option>
                    <option value="petugas">PETUGAS</option>
                  </select>
                </div>
          
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->