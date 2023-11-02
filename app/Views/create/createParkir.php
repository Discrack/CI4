<?= $this->extend('_layout/template') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  
</section>

<!-- Main content -->

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-bottom : 10px"><b>DataTable Parkir Tambah Data</b></h3>
                <div class="dt-buttons btn-group flex-wrap">
                  <a class="btn btn-success btn-tambah" href="<?php echo base_url('/parkir');?>">
                    <i class="fa fa-home"></i>&nbsp; Kembali
                  </a>
                </div>
              </div>

              
              <!-- /.card-header -->
              
              </div>
              <!-- /.card-body -->
              <div class="card card-primary">
              <div class="card-header">
                <h3>Form Tambah Data Parkir</h3>
              </div>
              <div class="card-body">

              <div class="">
                      <div class="form-group">
                        <label>ID Member (Auto Increment)</label>
                        <input type="text" class="form-control" placeholder="IDM-001" disabled="">
                      </div>
                    </div>

              <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Kendaraan</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                <!-- Date -->
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Date and time -->
                <div class="form-group">
                  <label>Tanggal Keluar</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime">
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- /.form group -->
                <!-- Date range -->
                
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date and time range -->
                
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date and time range -->
                
                <!-- /.form group -->
              </div>
                
              <!-- /.card-body -->
            </div>

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


<!-- /.content -->
<?= $this->endSection() ?>