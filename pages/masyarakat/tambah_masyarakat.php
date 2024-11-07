<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH MASYARAKAT
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH MASYARAKAT</li>
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
            <form role="form" method="post" action="pages/masyarakat/tambah_masyarakat_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>nama masyarakat</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="nama lengkap" required>
                </div>  
                <div class="form-group">
                  <label>username</label>
                  <input type="text" name="username" class="form-control" placeholder="username" required>
                </div>  
                <div class="form-group">
                  <label>password</label>
                  <input type="text" name="password" class="form-control" placeholder="password" required>
                </div>  
                <div class="form-group">
                  <label>telp</label>
                  <input type="text" name="telp" class="form-control" placeholder="telp" required>
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