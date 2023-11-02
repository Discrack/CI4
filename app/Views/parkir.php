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
                <h3 class="card-title" style="margin-bottom : 10px">DataTable Parkir</h3>
                <div class="dt-buttons btn-group flex-wrap">
                  <a class="btn btn-secondary buttons-excel" href="#"><span>Excel</span></a>
                  <a class="btn btn-secondary buttons-pdf" href="#"><span>PDF</span></a>
                  <a class="btn btn-secondary buttons-print" href="#"><span>Print</span></a>
                  <a class="btn btn-primary buttons-tambah" href="#"><span>Tambah Data</span></a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
  
                  <thead>
                  <tr align="center">
                    <th>No ID</th>
                    <th>ID Member</th>
                    <th>No Kendaraan</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Lama</th>
                    <th>Biaya</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($parkir as $p): ?>
                      <tr align="center">
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['id_member'] ?></td>
                        <td><?= $p['no_kendaraan'] ?></td>
                        <td><?= $p['tgl_masuk'] ?></td>
                        <td><?= $p['tgl_keluar'] ?></td>
                        <td><?= $p['lama'] ?></td>
                        <td><?= $p['biaya'] ?></td>
                        <td class="table-actions">
                          <a style="margin-right: 15px;" class="btn btn-info btn-sm" href="<?= base_url('/admin/updateParkir/' .$p['id']) ?>">
                              <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?= base_url('/admin/deleteParkir/' .$p['id']) ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');">
                              <i class="fas fa-trash"></i>
                          </a>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>

                </table>
              </div>
              </div>
              <!-- /.card-body -->
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