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
            <form action="<?= site_url('/nama_pelaksana/edit/' . $nama_pelaksana['id']) ?>" method="post">
              <div class="form-group">
                <label for="nama_pelaksana">Nama Pelaksana:</label>
                <input type="text" class="form-control" name="nama_pelaksana" value="<?= $nama_pelaksana['nama_pelaksana'] ?>" required>
              </div>
              <div class="form-group">
                <label for="nik_nip">NIK/NIP:</label>
                <input type="text" class="form-control" name="nik_nip" value="<?= $nama_pelaksana['nik_nip'] ?>" required>
              </div>
              <div class="form-group">
                <label for="no_telp">No Telepon:</label>
                <input type="text" class="form-control" name="no_telp" value="<?= $nama_pelaksana['no_telp'] ?>" required>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="<?= $nama_pelaksana['email'] ?>" required>
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" name="jabatan" value="<?= $nama_pelaksana['jabatan'] ?>" required>
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
                <a href="<?= site_url('nama_pelaksana') ?>" class="btn btn-secondary">Cancel</a>
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
