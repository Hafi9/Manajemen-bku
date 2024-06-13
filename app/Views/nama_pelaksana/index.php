<!-- Views untuk menampilkan data Pelaksana -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nama Pelaksana</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Nama Pelaksana</li>
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
                <a href="<?= site_url('/nama_pelaksana/create') ?>" class="btn btn-block btn-primary btn-sm">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Pelaksana</th>
                    <th>NIK/NIP</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Bagian</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php foreach ($nama_pelaksanas as $nama_pelaksana) : ?>
            <tbody>
                  <tr>
                    <td>
                        <?= $nama_pelaksana['nama_pelaksana'] ?>
                    </td>
                    <td>
                        <?= $nama_pelaksana['nik_nip'] ?>
                    </td>
                    <td>
                        <?= $nama_pelaksana['no_telp'] ?>
                    </td>
                    <td>
                        <?= $nama_pelaksana['email'] ?>
                    </td>
                    <td>
                        <?= $nama_pelaksana['jabatan'] ?>
                    </td>
                    <td>
                        <?= $nama_pelaksana['status_pegawai'] ?>
                    </td>
                    <td>
                        <?= $nama_pelaksana['bagian_dprd_id'] ?>
                    </td>
                    <td>
                        <a href="<?= site_url('/nama_pelaksana/edit/' . $nama_pelaksana['id']) ?>">Edit</a>
                        <a href="<?= site_url('/nama_pelaksana/delete/' . $nama_pelaksana['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
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