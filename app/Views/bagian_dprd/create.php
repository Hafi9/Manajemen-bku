<!-- create.php -->

<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
     <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Bagian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Bagian</li>
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
            <form action="<?= site_url('/bagian_dprd/create') ?>" method="post">
              <div class="form-group">
                <label for="nama_bagian" class="form-label">Nama Bagian:</label>
                <input type="text" class="form-control" name="nama_bagian" id="nama_bagian" placeholder="Masukkan Nama Bagian" required>
                <div class="form-group">
                    <label for="">Nama pembina : </label>
                    <input type="text" name="nama_pembina" id="nama_pembina" class="form-control" placeholder="Nama pembina">
                </div>
                <div class="form-group">
                    <label for="">Nip pembina : </label>
                    <input type="text" name="nip_pembina" id="nip_pembina" class="form-control" placeholder="Nip pembina">
                </div>
                <div class="form-group">
                    <label for="">Nama pembina utama muda : </label>
                    <input type="text" name="nama_pembina_utama_muda" id="nama_pembina_utama_muda" class="form-control" placeholder="Nama pembina utama muda">
                </div>
                <div class="form-group">
                    <label for="">Nip pembina utama muda : </label>
                    <input type="text" name="nip_pembina_utama_muda" id="nip_pembina_utama_muda" class="form-control" placeholder="Nip pembina utama muda" >
                </div>
                <div class="form-group">
                    <label for="">Nama penata muda : </label>
                    <input type="text" name="nama_penata_muda" id="nama_penata_muda" class="form-control" placeholder="Nama penata muda">
                </div>
                <div class="form-group">
                    <label for="">Nip penata muda : </label>
                    <input type="text" name="nip_penata_muda" id="nip_penata_muda" class="form-control" placeholder="Nip penata muda">
                </div>
                <div class="form-group">
                    <label for="">Nama bendahara : </label>
                    <input type="text" name="nama_bendahara" id="nama_bendahara" class="form-control" placeholder="Nama bendahara">
                </div>
                <div class="form-group">
                    <label for="">Nip bendahara : </label>
                    <input type="text" name="nip_bendahara" id="nip_bendahara" class="form-control" placeholder="Nip bendahara">
                </div>
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
              <a href="<?= site_url('bagian_dprd') ?>" class="btn btn-secondary">Cancel</a>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
