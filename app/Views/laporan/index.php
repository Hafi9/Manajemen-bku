<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Perjalanan Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Perjalanan Dinas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SP</th>
                    <th>SPPD</th>
                    <th>Laporan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php foreach ($laporans as $laporan) : ?>
            <tbody>
                  <tr>
                    <td>
                    <form action="<?= site_url('public/uploads/sp/') ?>" method="post" enctype="multipart/form-data">
                      <a href="<?= base_url('uploads/SP/'.$laporan["sp"])?>" class="btn btn-primary btn-block"><i class="fa fa-file"></i> DOWNLOAD SP</a>
                    </form>
                    </td>
                    <td>
                      <a href="<?= base_url('uploads/SPPD/'.$laporan["sppd"])?>" class="btn btn-primary btn-block"><i class="fa fa-file"></i> DOWNLOAD SPPD</a>
                    </td>
                    <td>
                      <a href="<?= base_url('uploads/Laporan/'.$laporan["laporan_pdf"])?>" class="btn btn-primary btn-block"><i class="fa fa-file"></i> DOWNLOAD LAPORAN</a>
                    </td>
                    <td>
                      <?php
                        if ($laporan['status'] == 2) {
                            echo "<span class='text-success'>DISETUJUI</span>";
                        } else if($laporan["status"] == 3){
                            echo "<span class='text-danger'>DITOLAK</span>";
                        }else{
                          echo "<span class='text-secondary'>PENDING</span>";
                        }
                      ?>
                    </td>
                    <?php if (in_groups('admin')) : ?>
                    <td>
                        <?php if($laporan["status"] != 2):?>
                          <a href="<?= site_url('laporan/konfirmasi/') . $laporan["id"] ?>" class="btn btn-primary btn-sm">Konfirmasi</a>
                        <?php else:?>
                          <span class="text-warning">SUDAH DI KONFIRMASI</span>
                        <?php endif?>
                    </td>
                    <?php else: ?>
                      <td>
                        <?php if($laporan["status"] != "2"):?>
                          <!-- <a class="btn btn-sm btn-warning" href="<?= site_url('laporan_perjalanan_dinas/edit/' . $laporan['id']) ?>">Upload ulang</a> -->
                          <a class="btn btn-sm btn-warning" href="<?= site_url('laporan/editLaporan/').$laporan['id'] ?>">Upload ulang</a>
                        <?php else:?>
                          <span class="text-warning">SUDAH DI KONFIRMASI</span>
                        <?php endif?>
                      </td>
                    <?php endif?>
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