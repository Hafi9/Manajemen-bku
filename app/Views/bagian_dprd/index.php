<!-- Views untuk menampilkan data Bagian -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bagian DPRD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bagian DPRD</li>
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
                <a href="<?= site_url('/bagian_dprd/create') ?>" class="btn btn-block btn-primary btn-sm">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Bagian</th>
                    <th>Nama PPTK</th>
                    <th>Nama KPA</th>
                    <th>Nama Bendahara</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php foreach ($bagian as $data) : ?>
            <tbody>
                  <tr>
                    <td>
                        <?= $data['nama_bagian'] ?>
                    </td>
                    <td>
                        <?= $data['nama_pembina'] ?>
                    </td>
                    <td>
                        <?= $data['nama_pembina_utama_muda'] ?>
                    </td>
                    <td>
                        <?= $data['nama_bendahara'] ?>
                    </td>
                    <td>
                        <a href="<?= site_url('bagian_dprd/edit/' . $data['id']) ?>">Edit</a>
                        <a href="<?= site_url('bagian_dprd/delete/' . $data['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
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