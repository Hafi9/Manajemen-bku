<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cetak Kwitansi PERDIN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cetak Kwitansi</li>
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
            <form action="<?= site_url('/rincian_perdin/create') ?>" method="post">
            <div class="form-group">
                <input value="<?= $perdin_id?>" type="hidden" required class="form-control" name="perdin_id">
            </div>
            <div class="form-group">
              <label for="user_id">Nama anggota:</label>
              <select name="user_id" id="user_id" class="form-control">
                <option value="">- Pilih -</option>
                <?php foreach($namaPelaksana as $np):?>
                  <option value="<?= $np["user_id"]?>"><?= $np["nama_pelaksana"]?></option>
                <?php endforeach?>
              </select>
            </div>
              <div class="form-group">
                <label for="judul_rincian">Tujuan:</label>
                <input class="form-control" type="text" name="judul_rincian" id="judul_rincian" required>
              </div>
              <div class="form-group">
                <!-- Uang Harian -->
                <label for="uang_harian">Uang Harian:</label>
                <input class="form-control" type="number" name="uang_harian" id="uang_harian">
                <label for="jumlah_hari_harian">Jumlah Hari:</label>
                <input class="form-control" type="number" name="jumlah_hari_harian" id="jumlah_hari_harian">
              </div>
              <div class="form-group">
                <!-- Uang Representasi -->
                <label for="uang_representasi">Uang Representasi:</label>
                <input class="form-control" type="number" name="uang_representasi" id="uang_representasi">
                <label for="jumlah_hari_representasi">Jumlah Hari:</label>
                <input class="form-control" type="number" name="jumlah_hari_representasi" id="jumlah_hari_representasi">
              </div>
              <!-- <div class="form-group">
                <label for="biaya">Biaya:</label>
                <input type="text" name="biaya" required class="form-control">
              </div> -->
              <div class="form-group">
                <!-- Akomodasi -->
                <label for="akomodasi">Akomodasi (per malam):</label>
                <input class="form-control" type="number" name="akomodasi" id="akomodasi">
                <label for="jumlah_malam_hotel">Jumlah Malam:</label>
                <input class="form-control" type="number" name="jumlah_malam_hotel" id="jumlah_malam_hotel">
              </div>
              <div class="form-group">
                <label for="tol">Tol:</label>
                <input class="form-control" type="number" name="tol" id="tol">
              </div>
              <div class="form-group">
                <label for="bbm">BBM:</label>
                <input class="form-control" type="number" name="bbm" id="bbm">
              </div>
              <div class="form-group">
                <label for="tgl_berangkat">Tanggal Berangkat:</label>
                <input class="form-control" type="date" name="tgl_berangkat" id="tgl_berangkat">
              </div>
              <div class="form-group">
                <label for="tgl_kembali">Tanggal Kembali:</label>
                <input class="form-control" type="date" name="tgl_kembali" id="tgl_kembali">
              </div>
              <div class="form-group">
                <label for="total">Total:</label>
                <input class="form-control" type="text" name="total" id="total" readonly>
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
              <input type="hidden" name="perdin_id" id="perdin_id" class="form-control" value="<?= $perdin_id?>">
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
<script>
    function calculateTotal() {
        const uangHarian = parseFloat(document.getElementById('uang_harian').value) || 0;
        const jumlahHariHarian = parseFloat(document.getElementById('jumlah_hari_harian').value) || 1;
        const uangRepresentasi = parseFloat(document.getElementById('uang_representasi').value) || 0;
        const jumlahHariRepresentasi = parseFloat(document.getElementById('jumlah_hari_representasi').value) || 1;
        const akomodasi = parseFloat(document.getElementById('akomodasi').value) || 0;
        const jumlahMalamHotel = parseFloat(document.getElementById('jumlah_malam_hotel').value) || 1;
        const tol = parseFloat(document.getElementById('tol').value) || 0;
        const bbm = parseFloat(document.getElementById('bbm').value) || 0;

        const totalHarian = uangHarian * jumlahHariHarian;
        const totalRepresentasi = uangRepresentasi * jumlahHariRepresentasi;
        const totalAkomodasi = akomodasi * jumlahMalamHotel;

        const total = totalHarian + totalRepresentasi + totalAkomodasi + tol + bbm;

        document.getElementById('total').value = total.toFixed(2);
    }

    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.addEventListener('input', calculateTotal);
    });

    // Initial calculation on page load
    calculateTotal();
</script>

<?= $this->endSection() ?>