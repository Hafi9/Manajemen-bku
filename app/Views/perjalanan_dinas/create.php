<!-- create.php -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Perjalanan Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Perjalanan Dinas</li>
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
            <form action="<?= site_url('/perjalanan_dinas/create') ?>" method="post">
              <div class="form-group">
                <label for="pelaksana_id">Pilih Pelaksana:</label>
                    <select name="pelaksana_id" required class="form-control">
                        <?php foreach ($namaPelaksana as $pelaksana) : ?>
                          <option value="<?= $pelaksana['id'] ?>"><?= $pelaksana['nama_pelaksana'] ?></option>
                        <?php endforeach; ?>
                    </select>
              </div>
              <div class="form-group">
                <label for="bagian_dprd_id">Komisi:</label>
                    <select name="bagian_dprd_id" required class="form-control">
                        <?php foreach ($bagian as $bgn) : ?>
                          <option value="<?= $bgn['id'] ?>"><?= $bgn['nama_bagian'] ?></option>
                        <?php endforeach; ?>
                    </select>
              </div>
              <div class="form-group">
                <label for="bbm_id">Pilih BBM:</label>
                    <select name="bbm_id" required class="form-control">
                        <?php foreach ($bbm as $item) : ?>
                          <option value="<?= $item['id'] ?>"><?= $item['kota'] ?></option>
                        <?php endforeach; ?>
                    </select>
              </div>
              <!-- <div class="form-group">
                <label for="biaya">Biaya:</label>
                <input type="text" name="biaya" required class="form-control">
              </div> -->
              <div class="form-group">
                <label for="transportasi">Transportasi:</label>
                <textarea name="transportasi" id="transportasi" cols="30" rows="10" required class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="keterangan">Untuk Pembayaran:</label>
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" required class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="kode_rekening">Kode Rekening:</label>
                <textarea name="kode_rekening" id="kode_rekening" cols="30" rows="10" required class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="anggota">Anggota:</label>
                <textarea name="anggota" id="anggota" cols="30" rows="10" required class="form-control"></textarea>
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
              <a href="<?= site_url('perjalanan_dinas') ?>" class="btn btn-secondary">Cancel</a>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>