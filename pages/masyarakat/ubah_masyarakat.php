<?php
$query = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE id_user='".$_GET['id']."'")
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
        <li class="active">UBAH MASYARAKAT</li>
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
            <form role="form" method="post" action="pages/masyarakat/ubah_masyarakat_proses.php">
              <div class="box-body">
                <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="<?php echo $row['nama_lengkap']; ?>" required>
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
                  <label>Telp</label>
                  <input type="text" name="telp" class="form-control" placeholder="telp" value="<?php echo $row['telp']; ?>" required>
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