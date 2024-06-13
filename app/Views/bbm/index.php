<!-- Views untuk menampilkan data BBM -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BBM dan Kota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BBM dan Kota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <a href="<?= site_url('bbm/create') ?>" class="btn btn-block btn-primary btn-sm">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Harga BBM</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php foreach ($bbmData as $bbm) : ?>
                  <tbody>
                    <tr>
                      <td>
                          <?= $bbm['provinsi'] ?>
                      </td>
                      <td>
                          <?= $bbm['kota'] ?>
                      </td>
                      <td>
                          <?= 'Rp.' . number_format($bbm['harga_bbm'], 0, ',', '.') ?>
                      </td>
                      <td>
                          <a href="<?= site_url('bbm/edit/' . $bbm['id']) ?>">Edit</a>
                          <a href="<?= site_url('bbm/delete/' . $bbm['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                      </td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
</section>
<?= $this->endSection() ?>