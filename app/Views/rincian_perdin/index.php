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
              <div class="card-header d-flex">
                <a class="btn btn-sm btn-primary mr-2" href="<?= site_url('/rincian_perdin/create/'.$_GET["data"]) ?>" class="btn btn-block btn-primary btn-sm">Tambah Data</a>
                <a class="btn btn-sm btn-danger mr-2" href="<?= site_url('/rincian_perdin/pdf/'.$_GET["data"].'/'.$rincianPerdin[0]["bagian_dprd_id"])?>"><i class="fa fa-file"></i> Cetak LP (PDF)</a>
                <a class="btn btn-sm btn-success" href="<?= site_url('/rincian_perdin/pdf')?>"><i class="fa fa-file"></i> Cetak LP (EXCEL)</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Nama anggota</th>
                    <th>Jabatan</th>
                    <th>Uang harian</th>
                    <th>Uang representasi</th>
                    <th>Akomodasi</th>
                    <th>Tol</th>
                    <th>Bbm</th>
                    <th>Jumlah total</th>
                    <th>Keterangan</th>
                    <th>Tanggal Keberangkatan</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php foreach ($rincianPerdin as $r) : ?>
            <tbody>
                  <tr>
                    <td><?= $r["provinsi"]?></td>
                    <td><?= $r["kota"]?></td>
                    <td>
                        <?= $r['nama_pelaksana'] ?>
                    </td>
                    <td>
                        <?= $r['jabatan'] ?>
                    </td>
                    <td>
                        <?= number_format($r['uang_harian']) ?>
                    </td>
                    <td>
                        <?= number_format($r['uang_representasi']) ?>
                    </td>
                    <td>
                        <?= number_format($r['akomodasi']) ?>
                    </td>
                    <td>
                        <?= number_format($r['tol']) ?>
                    </td>
                    <td>
                        <?= number_format($r['bbm']) ?>
                    </td>
                    <td>
                        <?= number_format($r['jumlah_total']) ?>
                    </td>
                    <td>
                        <?= $r['keterangan'] ?>
                    </td>
                    <td>
                        <?= $r['tgl_berangkat'] ?>
                    </td>
                    <td>
                        <?= $r['tgl_kembali'] ?>
                    </td>
                    <td>
                      <a href="<?= site_url('rincian_perdin/pdfsingle/' . $r["id"]."/".$r["bagian_dprd_id"]) ?>">cetak kwitansi</a>
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