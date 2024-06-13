<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Nama Pelaksana</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Nama Pelaksana</li>
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
            <form action="<?= site_url('/nama_pelaksana/create') ?>" method="post">
              <div class="form-group">
                <label for="user_id" class="form-label">Pilih User ID:</label>
                <select name="user_id" required class="form-control">
                    <?php foreach ($usersWithUserRole as $user) : ?>
                    <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="nama_pelaksana" class="form-label">Nama Pelaksana:</label>
                <input type="text" name="nama_pelaksana" required class="form-control" placeholder="Masukkan Nama Lengkap">
              </div>
              <div class="form-group">
                <label for="nik_nip" class="form-label">NIK/NIP:</label>
                <input type="text" name="nik_nip" required class="form-control" placeholder="Masukkan NIK/NIP">
              </div>
              <div class="form-group">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" name="jabatan" required class="form-control" placeholder="Masukkan Jabatan">
              </div>
              <div class="form-group">
                <label for="status_pegawai" class="form-label">Status:</label>
                <select name="status_pegawai" required class="form-control">
                    <option value="pns">PNS</option>
                    <option value="dewan">Dewan</option>
                    <option value="thl">THL</option>
                </select>
              </div>
              <div class="form-group">
                <label for="no_telp" class="form-label">No.Telepon:</label>
                <input type="tel" name="no_telp" required class="form-control" placeholder="Masukkan No.Telepon">
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" required class="form-control" placeholder="Masukkan Email">
              </div>
              <div class="form-group">
                <label for="bagian_dprd_id">Pilih Bagian:</label>
                    <select name="bagian_dprd_id" required class="form-control">
                        <?php foreach ($bagianDprd as $bagian): ?>
                        <option value="<?= $bagian['id'] ?>"><?= $bagian['nama_bagian'] ?></option>
                        <?php endforeach; ?>
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
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="<?= site_url('nama_pelaksana') ?>" class="btn btn-secondary">Cancel</a>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>