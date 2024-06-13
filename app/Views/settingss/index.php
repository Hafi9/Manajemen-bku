<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
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
              <h3 class="card-title">Menu</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form action="<?= site_url('settings/edit/'.$data["id"]) ?>" method="post">
                <div class="form-group">
                    <label for="">Nama pembina : </label>
                    <input type="text" name="nama_pembina" id="nama_pembina" class="form-control" placeholder="Nama pembina" value="<?= $data["nama_pembina"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nip pembina : </label>
                    <input type="text" name="nip_pembina" id="nip_pembina" class="form-control" placeholder="Nip pembina" value="<?= $data["nip_pembina"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nama pembina utama muda : </label>
                    <input type="text" name="nama_pembina_utama_muda" id="nama_pembina_utama_muda" class="form-control" placeholder="Nama pembina utama muda" value="<?= $data["nama_pembina_utama_muda"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nip pembina utama muda : </label>
                    <input type="text" name="nip_pembina_utama_muda" id="nip_pembina_utama_muda" class="form-control" placeholder="Nip pembina utama muda" value="<?= $data["nip_pembina_utama_muda"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nama penata muda : </label>
                    <input type="text" name="nama_penata_muda" id="nama_penata_muda" class="form-control" placeholder="Nama penata muda" value="<?= $data["nama_penata_muda"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nip penata muda : </label>
                    <input type="text" name="nip_penata_muda" id="nip_penata_muda" class="form-control" placeholder="Nip penata muda" value="<?= $data["nip_penata_muda"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nama bendahara : </label>
                    <input type="text" name="nama_bendahara" id="nama_bendahara" class="form-control" placeholder="Nama bendahara" value="<?= $data["nama_bendahara"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nip bendahara : </label>
                    <input type="text" name="nip_bendahara" id="nip_bendahara" class="form-control" placeholder="Nip bendahara" value="<?= $data["nip_pembina"]?>">
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="<?= site_url('dashboard') ?>" class="btn btn-secondary">Cancel</a>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>