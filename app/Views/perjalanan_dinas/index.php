<?php $session = \Config\Services::session(); ?>
<!-- Views untuk menampilkan data kas -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <?php if($session->getFlashdata("error")): ?>
      <?php for($i=0;$i<count($sesion->getFlashdata("error")); $i++): ?>
        <div class="alert alert-primary" role="alert">
          <?= $session->getFlashdata("error")[$i] ?>
        </div>
        <?php endfor ?>
    <?php endif ?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perjalanan Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perjalanan Dinas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <a href="<?= site_url('/perjalanan_dinas/create/') ?>" class="btn btn-block btn-primary btn-sm">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Transportasi</th>
                    <th>Keterangan</th>
                    <th>Kode Rekening</th>
                    <th>Kota</th>
                    <th>Provinsi</th>
                    <th>Biaya</th>
                    <th></th>
                  </tr>
                  </thead>
                  <?php foreach ($perjalanan as $perjalananDinas) : ?>
            <tbody>
                  <tr>
                    <td>
                        <?= $perjalananDinas['transportasi'] ?>
                    </td>
                    <td>
                        <?= $perjalananDinas['keterangan'] ?>
                    </td>
                    <td>
                        <?= $perjalananDinas['kode_rekening'] ?>
                    </td>
                    <td>
                        <?= $perjalananDinas['provinsi'] ?>
                    </td>
                    <td>
                        <?= $perjalananDinas['kota'] ?>
                    </td>
                    <td>
                        <?= 'Rp.' . number_format($perjalananDinas['biaya'], 0, ',', '.') ?>
                    </td>
                    <td>
                      <?php if($perjalananDinas["status"] == 2):?>
                          <a class="btn btn-info" href="<?= site_url('rincian_perdin?data=').$perjalananDinas['id'] ?>" class="btn btn-primary">Lihat Kwitansi <i class="material-icons opacity-10"></i></a>
                      <?php elseif($perjalananDinas["status"] == 3):?>
                        <span class="text-danger">Silahkan upload ulang laporan</span>
                      <?php elseif($perjalananDinas["status"] == 1):?>
                        <span class="text-secondary">Pending</span>
                      <?php elseif($perjalananDinas["status"] == NULL):?>
                      <div class="btn-group">
                        <a class="btn btn-success" href="<?= site_url('laporan/create/').$perjalananDinas['id'] ?>" class="btn btn-primary">Upload Laporan <i class="material-icons opacity-10"></i></a>
                        <a class="btn btn-info" href="<?= site_url('rincian_perdin?data=').$perjalananDinas['id'] ?>" class="btn btn-primary">Cetak Kwitansi <i class="material-icons opacity-10"></i></a>
                        <a class="btn btn-danger" href="<?= site_url('perjalanan_dinas/delete/').$perjalananDinas['id'] ?>" class="btn btn-primary">Hapus Data <i class="material-icons opacity-10"></i></a>
                      </div>
                      <?php endif;?>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach; ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
</section>
<?= $this->endSection() ?>