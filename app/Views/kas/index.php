<!-- Views untuk menampilkan data kas -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan KAS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan KAS</li>
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
                <h3 class="card-title">Data KAS Bagian DPRD</h3>
                <br>
                <div class="form-group w-50">
                  <label for="">Bagian : </label>
                  <select name="bagianNama" id="bagianNama" class="form-control">
                    <option value="">Semua</option>
                    <?php foreach($bagianData as $bd):?>
                      <option value="<?= $bd["id"]?>" <?php if(isset($_GET["bagian"]) && $_GET["bagian"] == $bd["id"]){
                        echo "selected";
                      }?>><?= $bd["nama_bagian"]?></option>
                    <?php endforeach?>
                  </select>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Bagian</th>
                    <th>keterangan</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                  </tr>
                  </thead>
                  <?php foreach ($kasData as $kas) : ?>
            <tbody>
                  <tr>
                    <td>
                        <?= $kas['bagian_dprd_id'] ?>
                    </td>
                    <td>
                        <?= $kas['keterangan'] ?>
                    </td>
                    <td>
                        <?= 'Rp.' . number_format($kas['debet'], 0, ',', '.') ?>
                    </td>
                    <td>
                        <?= 'Rp.' . number_format($kas['kredit'], 0, ',', '.') ?>
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

<script>
  const bagian = document.querySelector("#bagianNama")

  bagian.addEventListener("change", function(){

    const bagianNama = this.value

    window.location.replace("<?= site_url('kas')?>?bagian="+bagianNama)
  })

</script>

<?= $this->endSection() ?>