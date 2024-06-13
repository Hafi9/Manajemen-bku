<!-- edit.php -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<h1>Konfirmasi Data Perjalanan Dinas</h1>
<form action="<?= site_url('/perjalanan_dinas/konfirmasi/' . $perjalanan_dinas['id']) ?>" method="post">
    <p>Nama pelaksana : <?= $perjalanan_dinas["nama_pelaksana"] ?></p>
    <p>Perjalanan dinas ke : <?= $perjalanan_dinas["kota"] ?></p>
    <p>Biaya pengeluaran selama dinas : Rp <?= number_format($perjalanan_dinas["biaya"], 0, ".", ".") ?></p>
    <p>Anggota yang terlibat : <?= ($perjalanan_dinas["anggota"]) ? $perjalanan_dinas["anggota"] : "-" ?></p>
    <input type="hidden" name="perdin_id" id="perdin_id" value="<?= $perjalanan_dinas["id"] ?>">
    <input type="hidden" name="bagian_dprd_id" id="bagian_dprd_id" value="<?= $perjalanan_dinas["bagian_dprd_id"] ?>">
    <input type="hidden" name="debet" id="debet" value="<?= $perjalanan_dinas["biaya"] ?>">
    <input type="hidden" name="keterangan" id="keterangan" value="<?= "Perjalanan dinas ke kota " . $perjalanan_dinas["kota"] ?>">
    <button class="btn btn-primary" type="submit">Konfirmasi sebagai pengeluaran</button>
    <br>
    <small class="text-warning">* Cek laporan perjalanan dinas terlebih dahulu sebelum melakukan konfirmasi.</small>
</form>
<?= $this->endSection() ?>