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
              <h3 class="card-title">Edit Data</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <form action="<?= site_url('bagian_dprd/edit/' . $bagian['id']) ?>" method="post">
                <label for="nama_bagian" class="form-label">Nama Bagian:</label>
                <input type="text" class="form-control" name="nama_bagian" id="nama_bagian" value="<?= $bagian['nama_bagian'] ?>">
              </div>
              <div class="form-group">
                    <label for="">Nama pembina : </label>
                    <input type="text" name="nama_pembina" id="nama_pembina" class="form-control" placeholder="Nama pembina" value="<?= $bagian["nama_pembina"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nip pembina : </label>
                    <input type="text" name="nip_pembina" id="nip_pembina" class="form-control" placeholder="Nip pembina" value="<?= $bagian["nip_pembina"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nama pembina utama muda : </label>
                    <input type="text" name="nama_pembina_utama_muda" id="nama_pembina_utama_muda" class="form-control" placeholder="Nama pembina utama muda" value="<?= $bagian["nama_pembina_utama_muda"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nip pembina utama muda : </label>
                    <input type="text" name="nip_pembina_utama_muda" id="nip_pembina_utama_muda" class="form-control" placeholder="Nip pembina utama muda" value="<?= $bagian["nip_pembina_utama_muda"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nama penata muda : </label>
                    <input type="text" name="nama_penata_muda" id="nama_penata_muda" class="form-control" placeholder="Nama penata muda" value="<?= $bagian["nama_penata_muda"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nama bendahara : </label>
                    <input type="text" name="nama_bendahara" id="nama_bendahara" class="form-control" placeholder="Nama bendahara" value="<?= $bagian["nama_bendahara"]?>">
                </div>
                <div class="form-group">
                    <label for="">Nip bendahara : </label>
                    <input type="text" name="nip_bendahara" id="nip_bendahara" class="form-control" placeholder="Nip bendahara" value="<?= $bagian["nip_pembina"]?>">
                </div>
              <!-- <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" rows="4">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option selected>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control" value="Tony Chicken">
              </div> -->
                <a href="<?= site_url('bagian_dprd') ?>" class="btn btn-secondary">Cancel</a>
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
