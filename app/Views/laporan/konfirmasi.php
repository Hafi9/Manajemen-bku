<!-- edit.php -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<!-- <h1>Konfirmasi Data Perjalanan Dinas</h1>
<form action="<?= site_url('/laporan/konfirmasi/' . $laporan_perjalanan_dinas['id']) ?>" method="post">
    <p>Nama pelaksana : <?= $laporan_perjalanan_dinas["nama_pelaksana"] ?></p>
    <p>Perjalanan dinas ke : Provinsi <?= $laporan_perjalanan_dinas["provinsi"] ?>, Kab <?= $laporan_perjalanan_dinas["kota"] ?></p>
    <p>Biaya pengeluaran selama dinas : Rp <?= number_format($laporan_perjalanan_dinas["biaya"], 0, ".", ".") ?></p>
    <p>Anggota yang terlibat : <?= ($laporan_perjalanan_dinas["anggota"]) ? $laporan_perjalanan_dinas["anggota"] : "-" ?></p>
    <input type="hidden" name="perdin_id" id="perdin_id" value="<?= $laporan_perjalanan_dinas["perdin_id"] ?>">
    <input type="hidden" name="bagian_dprd_id" id="bagian_dprd_id" value="<?= $laporan_perjalanan_dinas["bagian_dprd_id"] ?>">
    <input type="hidden" name="debet" id="debet" value="<?= $laporan_perjalanan_dinas["biaya"] ?>">
    <input type="hidden" name="keterangan" id="keterangan" value="<?= "Perjalanan dinas ke kab/kota " . $laporan_perjalanan_dinas["kota"] ?>">
    <label for="">Status</label>
    <select name="status" id="status">
        <option value="">Pilih</option>
        <option value="2" <?php if ($laporan_perjalanan_dinas["status"] == 2) {
                                echo "selected";
                            } ?>>Setujui</option>
        <option value="3" <?php if ($laporan_perjalanan_dinas["status"] == 3) {
                                echo "selected";
                            } ?>>Tolak</option>
    </select>
    <button class="btn btn-primary" type="submit">Konfirmasi sebagai pengeluaran</button>
    <br>
    <small class="text-warning">* Cek laporan perjalanan dinas terlebih dahulu sebelum melakukan konfirmasi.</small>
</form> -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Konfirmasi Data Perjalanan Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Konfirmasi Data Perjalanan Dinas</li>
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
              <h3 class="card-title">Konfirmasi</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form action="<?= site_url('/laporan/konfirmasi/' . $laporan_perjalanan_dinas['id']) ?>" method="post">
              <div class="form-group">
                <label for="nama_pelaksana" class="form-label">Nama Pelaksana:</label>
                <input type="text" class="form-control" name="nama_pelaksana" value="<?= $laporan_perjalanan_dinas["nama_pelaksana"] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="perjalanan_dinas" class="form-label">Perjalanan dinas ke :</label>
                <input type="text" name="perjalanan_dinas" required class="form-control" value="Provinsi <?= $laporan_perjalanan_dinas["provinsi"] ?>, Kab <?= $laporan_perjalanan_dinas["kota"] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="biaya" class="form-label">Biaya pengeluaran selama dinas :</label>
                <input type="text" name="biaya" required class="form-control" value="Rp <?= number_format($laporan_perjalanan_dinas["biaya"], 0, ".", ".") ?>" disabled>
              </div>
              <div class="form-group">
                <label for="anggota" class="form-label">Anggota yang terlibat :</label>
                <input type="text" name="anggota" required class="form-control" value="<?= ($laporan_perjalanan_dinas["anggota"]) ? $laporan_perjalanan_dinas["anggota"] : "-" ?>" disabled>
              </div>
              <div class="form-group">
                <input type="hidden" name="perdin_id" id="perdin_id" value="<?= $laporan_perjalanan_dinas["perdin_id"] ?>">
                <input type="hidden" name="bagian_dprd_id" id="bagian_dprd_id" value="<?= $laporan_perjalanan_dinas["bagian_dprd_id"] ?>">
                <input type="hidden" name="debet" id="debet" value="<?= $laporan_perjalanan_dinas["biaya"] ?>">
                <input type="hidden" name="keterangan" id="keterangan" value="<?= "Perjalanan dinas ke kab/kota " . $laporan_perjalanan_dinas["kota"] ?>">
              </div>
              <div class="form-group">
                <label for="">Status :</label>
                <select name="status" class="form-control id="status">
                    <option value="">Pilih</option>
                    <option value="2" <?php if ($laporan_perjalanan_dinas["status"] == 2) {
                                            echo "selected";
                                        } ?>>Setujui</option>
                    <option value="3" <?php if ($laporan_perjalanan_dinas["status"] == 3) {
                                            echo "selected";
                                        } ?>>Tolak</option>
                </select>
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
                <button class="btn btn-primary" type="submit">Konfirmasi sebagai pengeluaran</button>
                <a href="<?= site_url('laporan') ?>" class="btn btn-secondary">Cancel</a>
                <br>
                <small class="text-warning">* Cek laporan perjalanan dinas terlebih dahulu sebelum melakukan konfirmasi.</small>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>