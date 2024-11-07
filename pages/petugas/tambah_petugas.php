<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH PETUGAS
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH PETUGAS</li>
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
            <form role="form" method="post" action="pages/petugas/tambah_petugas_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>nama petugas</label>
                  <input type="text" name="nama_petugas" class="form-control" placeholder="nama petugas" required>
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