<!-- Views untuk menampilkan data Anggaran -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Anggaran Bagian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Anggaran Bagian</li>
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
                <a href="<?= site_url('pengiriman_uang/create') ?>" class="btn btn-block btn-primary btn-sm">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Bagian</th>
                    <th>Keterangan</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Jumlah Uang</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php foreach ($pengiriman_uang as $pengiriman) : ?>
            <tbody>
                  <tr>
                    <td>
                        <?= $pengiriman['bagian_dprd_id'] ?>
                    </td>
                    <td>
                        <?= $pengiriman['keterangan'] ?>
                    </td>
                    <td>
                        <?= $pengiriman['tanggal_pengiriman'] ?>
                    </td>
                    <td>
                        <?= 'Rp.' . number_format($pengiriman['jumlah_uang'], 0, ',', '.') ?>
                    </td>
                    <td>
                        <!-- <a href="<?= site_url('pengiriman_uang/edit/' . $pengiriman['id']) ?>">Edit</a> -->
                        <a href="<?= site_url('pengiriman_uang/delete/' . $pengiriman['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
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