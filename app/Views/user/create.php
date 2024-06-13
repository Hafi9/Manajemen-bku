<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah User</li>
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
            <form action="<?= site_url('user/create') ?>" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" type="text" name="username" id="username" required>
            </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="text" name="password" id="password" required>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" id="email" required>
              </div>
              <div class="form-group">
                <label for="group_id">Role:</label>
                <select class="form-control" name="group_id" id="group_id" required>
                    <option value="">Select Role</option>   
                    <?php foreach ($roles as $role): ?>
                        <option value="<?= $role["id"] ?>"><?= $role["name"] ?></option>
                    <?php endforeach; ?>
                </select>
              </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= site_url('user') ?>" class="btn btn-secondary">Cancel</a>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
