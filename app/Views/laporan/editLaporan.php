<!-- Views untuk membuat data laporan perjalanan dinas baru -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Upload Laporan dan Cetak Kwitansi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload Laporan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Upload Laporan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form action="<?= site_url('laporan/editLaporan/'.$id) ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="sp">SP:</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="sp" class="dropify" id="sp">
                        <small class="text-danger d-block">* Jika dikosongkan maka file tidak terupdate</small>
                        <a href="<?= base_url('uploads/SP/'.$data_laporan["sp"])?>" class="btn btn-sm btn-info" target="_blank" download>Download file lama</a>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="sppd">SPPD:</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="sppd" class="dropify" id="sppd">
                        <small class="text-danger d-block">* Jika dikosongkan maka file tidak terupdate</small>
                        <a href="<?= base_url('uploads/SPPD/'.$data_laporan["sppd"])?>" class="btn btn-sm btn-info" target="_blank" download>Download file lama</a>
                    </div>
                    <div>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="laporan_pdf">Laporan:</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="laporan_pdf" class="dropify" id="laporan_pdf">
                        <small class="text-danger d-block">* Jika dikosongkan maka file tidak terupdate</small> 
                        <a href="<?= base_url('uploads/Laporan/'.$data_laporan["laporan_pdf"])?>" class="btn btn-sm btn-info" target="_blank" download>Download file lama</a>
                    </div>
                </div>
              </div>
              <button type="submit" class="btn btn-warning">Ubah</button>
              <a href="<?= site_url('laporan') ?>" class="btn btn-secondary">Cancel</a>
            </div>
  </form>
</section>
<?= $this->endSection() ?>