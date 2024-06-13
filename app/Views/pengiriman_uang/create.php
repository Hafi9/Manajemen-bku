<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kirim Anggaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Anggaran</li>
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
              <h3 class="card-title">Tambah Data</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form action="<?= site_url('pengiriman_uang/create') ?>" method="post">
              <div class="form-group">
                <label for="bagian_dprd_id">Pilih Bagian:</label>
                    <select class="form-control" name="bagian_dprd_id" required>
                        <?php foreach ($bagianDprd as $bagian): ?>
                            <option value="<?= $bagian['id'] ?>"><?= $bagian['nama_bagian'] ?></option>
                        <?php endforeach; ?>
                    </select>
              </div>
              <div class="form-group">
                <label for="jumlah_uang">Jumlah Uang:</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" name="jumlah_uang" id="jumlah_uang" placeholder="Jumlah Uang" required>
                    </div>
              </div>
              <div class="form-group">
                <label for="tanggal_pengiriman">Tanggal Pengiriman:</label>
                <input type="date" class="form-control" name="tanggal_pengiriman">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" name="keterangan"></textarea>
              </div>
              <!-- <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div> -->
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="<?= site_url('pengiriman_uang') ?>" class="btn btn-secondary">Cancel</a>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
