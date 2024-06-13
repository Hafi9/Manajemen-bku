<!-- edit.php -->

<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
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
              <h3 class="card-title">Edit Data Anggaran</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <form action="<?= site_url('pengiriman_uang/edit/' . $pengirimanUang['id']) ?>" method="post">
                <label for="pengiriman_uang" class="form-label">Anggaran:</label>
                <input type="text" class="form-control" name="pengiriman_uang" id="pengiriman_uang" value="Rp. <?= number_format($pengirimanUang['jumlah_uang'], 2, ',', '.') ?>">
              </div>
                <a href="<?= site_url('pengiriman_uang') ?>" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save Changes" class="btn btn-success float-right">
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          
        </div>
      </div>
    </section>
<?= $this->endSection() ?>
