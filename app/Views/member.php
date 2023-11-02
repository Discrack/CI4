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
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Member</h3>
                <a href="<?php echo base_url('/member/create');?>" class="btn btn-primary float-right">
                <i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr align="center">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($member as $m): ?>
                      <tr align="center">
                        <td><?= $m['id'] ?></td>
                        <td><?= $m['nama'] ?></td>
                        <td><?= $m['tgl_masuk'] ?></td>
                        <td><?= $m['tgl_keluar'] ?></td>
                        <td><?= $m['status'] ?></td>
                        <td><a href="<?= base_url('/admin/deleteMember/' .$m['id']) ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');">Hapus</a></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  
                </table>
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