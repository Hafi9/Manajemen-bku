<!DOCTYPE html>
<html lang="en" style="page-break-after: always;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        html {
            padding: 0;
            margin: 25px;
            font-family: 'Times New Roman', Times, serif;
        }

        .w-100 {
            width: 100%;
        }

        .w-10 {
            width: 10%;
        }

        .w-50 {
            width: 50%;
        }

        .f-small {

            font-size: small;

        }

        .f-smaller {

            font-size: smaller;

        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .d-block {
            display: block;
        }

        .bg-gray {
            background-color: #afb8c7;
        }

        .text-bold {
            font-weight: 700;
        }

        .border {
            border: 1px solid black;
        }

        .border-collapse {
            border: 2px solid black;
            border-collapse: collapse;
        }

        .clearfix {
            overflow: auto !important;
        }

        .ttd-kepala {
            position: absolute;
            width: 300px;
            text-align: center;
            right: 10px;
            top: 400px;
        }

        .text-underline {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="ttd-kepala">
        <small class="d-block">Gresik, <?= date("d/m/Y")?></small>
        <small class="d-block">Yang Bepergian</small>
        <br>
        <br>
        <p class="text-bold text-underline" style="padding: 0px; margin: 0px;"><?= $data["nama_pelaksana"]?></p>
        <small class="d-block">NIP. <?= $data["nik_nip"]?></small>
    </div>
    <div class="w-100" style="margin-bottom: 20px;">
        <table class="w-100">
            <thead>
                <tr>
                    <td colspan="2" class="text-right">
                        <small class="d-block">Kode rekening : <?= $data["kode_rekening"]?></small>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <table class="w-100">
                            <tbody>
                                <tr>
                                    <td>SKPD</td>
                                    <td>: Sekertariat DPRD Kab.Gresik</td>
                                </tr>
                                <tr>
                                    <td>TA</td>
                                    <td>: 2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td class="w-50">
                        <div class="d-block w-50" style="float: right;">
                            <table class="w-100 border">
                                <thead class="bg-gray">
                                    <tr>
                                        <td colspan="2" class="text-center text-bold">Bukti kas</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>: 01/12/2023</td>
                                    </tr>
                                    <tr>
                                        <td>No.</td>
                                        <td>: 998238891023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="clear:right"></div>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <div class="w-100">
        <h2 class="text-center">KWITANSI</h2>
        <table class="w-100">
            <tbody>
                <tr>
                    <td>Sudah diterima</td>
                    <td>:</td>
                    <td>PEMERINTAH KABUPATEN GRESIK</td>
                </tr>
                <tr>
                    <td>Uang sebesar</td>
                    <td>:</td>
                    <td class="bg-gray text-center text-bold">
                        <?= terbilang($data["jumlah_total"])?>
                    </td>
                </tr>
                <tr>
                    <td>Untuk pembayaran</td>
                    <td>:</td>
                    <td class="">
                        <small class="d-block"><?= $data["untuk_pembayaran"]?></small>
                    </td>
                </tr>
                <tr>
                    <td>Sebesar</td>
                    <td>:</td>
                    <td>
                        <div class="bg-gray w-50 text-bold">
                            <small class="d-block text-right">Rp. <?= number_format($data["jumlah_total"], 0, ".", ".")?></small>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pangkat/GOL</td>
                    <td>:</td>
                    <td>
                        <div>
                            <?= $data["jabatan"]?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Kedudukan</td>
                    <td>:</td>
                    <td>
                        <div>
                            Sekretaris DPRD pada Sekretariat DPRD Kabupaten Gresik
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="w-100" style="margin-top: 160px;">
        <h4 class="text-center">PERINCIAN PERHITUNGAN BIAYA PERJALANAN DINAS</h4>
        <table class="w-100 border-collapse">
            <thead>
                <tr>
                    <th class="border-collapse">NO</th>
                    <th class="border-collapse">PERINCIAN PERJALANAN</th>
                    <th class="border-collapse">JUMLAH</th>
                    <th class="border-collapse">KETERANGAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <small class="d-block">Transportasi</small>
                        <small class="d-block">Tujuan</small>
                    </td>
                    <td>
                        <small class="d-block">: <?= $data["transportasi"]?></small>
                        <small class="d-block">: <?= $data["judul_rincian"]?></small>
                    </td>
                    <td>
                        <small class="d-block">Rp. <?= number_format($data["bbm"], 0, ".", ".")?></small>
                    </td>
                    <td>
                        <small class="d-block">Lamanya : <?= $data["keterangan"]?></small>
                        <small class="d-block">Dari tanggal : <?= $data["tgl_berangkat"]?></small>
                        <small class="d-block">S/d tanggal : <?= $data["tgl_kembali"]?></small>
                    </td>
                </tr>
                <tr>
                    <td>
                        <small class="d-block">Lumpsum</small>
                        <small class="d-block">Selama</small>
                    </td>
                    <td>
                        <small class="d-block">: Uang Harian</small>
                        <small class="d-block">: <?php 
                                                    $ket = explode(",", $data["keterangan"]) ;
                                                    echo $ket[0];
                                                 ?></small>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <small class="d-block">Uang Harian</small>
                        <small class="d-block">Uang Representasi</small>
                    </td>
                    <td>
                        <small class="d-block">: 1 org x <?php 
                                                    $ket = explode(",", $data["keterangan"]) ;
                                                    echo $ket[0];
                                                 ?></small>
                        <small class="d-block">: 1 org x <?php 
                                                    $ket = explode(",", $data["keterangan"]) ;
                                                    echo $ket[0];
                                                 ?></small>
                    </td>
                    <td>
                        <small class="d-block">Rp. <?= number_format(substr($ket[0], 0, 1) * $data["uang_harian"], 0, ".", ".")?></small>
                        <small class="d-block">Rp. <?= number_format($data["uang_representasi"], 0, ".", ".")?></small>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <small class="d-block">Akomodasi</small>
                        <small class="d-block">TOL</small>
                    </td>
                    <td>
                        <small class="d-block">: <?php 
                                                    $ket = explode(",", $data["keterangan"]) ;
                                                    echo $ket[0];
                                                 ?></small>
                        <small class="d-block">: </small>
                    </td>
                    <td>
                        <small class="d-block">Rp. <?= number_format($data["akomodasi"], 0, ".", ".")?></small>
                        <small class="d-block">Rp. <?= number_format($data["tol"], 0, ".", ".")?></small>
                    </td>
                    <td></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="border-collapse text-center" colspan="2">
                        TOTAL
                    </th>
                    <th class="border-collapse text-left" colspan="2">Rp. <?= number_format($data["jumlah_total"], 0, ".", ".")?></th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="w-100" style="margin-top: 10px;">
        <table class="w-100">
            <tr>
                <td></td>
                <td><small class="text-center d-block">Mengetahui / Menyetujui,</small></td>
                <td><small class="text-center d-block">Lunas dibayar</small></td>
            </tr>
            <tr>
                <td>
                    <small class="text-center d-block">Pejabat Pelaksana Teknis Kegiatan</small>
                </td>
                <td>
                    <small class="text-center d-block">Pengguna Anggaran</small>
                </td>
                <td>
                    <small class="text-center d-block">Bendahara Pengeluaran</small>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 30px;"></td>
            </tr>
            <tr>
                <td>
                    <p class="text-center text-bold text-underline" style="margin: 0; padding:0;"> <?= $settings["nama_pembina"]?></p>
                </td>
                <td>
                    <p class="text-center text-bold text-underline" style="margin: 0; padding:0;"> <?= $settings["nama_pembina_utama_muda"]?></p>
                </td>
                <td>
                    <p class="text-center text-bold text-underline" style="margin: 0; padding:0;"> <?= $settings["nama_bendahara"]?></p>
                </td>
            </tr>
            <tr>
                <td><small class="text-center d-block">Pembina</small></td>
                <td><small class="text-center d-block">Pembina Utama Muda</small></td>
                <td><small class="text-center d-block">Penata Muda</small></td>
            </tr>
            <tr>
                <td>
                    <small class="text-center d-block">NIP. <?= $settings["nip_pembina"]?></small>
                </td>
                <td>
                    <small class="text-center d-block">NIP. <?= $settings["nip_pembina_utama_muda"]?></small>
                </td>
                <td>
                    <small class="text-center d-block">NIP. <?= $settings["nip_bendahara"]?></small>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        html {
            padding: 0;
            margin: 25px;
            font-family: 'Times New Roman', Times, serif;
        }

        .w-100 {
            width: 100%;
        }

        .w-10 {
            width: 10%;
        }

        .w-50 {
            width: 50%;
        }

        .f-small {

            font-size: small;

        }

        .f-smaller {

            font-size: smaller;

        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .d-block {
            display: block;
        }

        .bg-gray {
            background-color: #afb8c7;
        }

        .text-bold {
            font-weight: 700;
        }

        .border {
            border: 1px solid black;
        }

        .border-collapse {
            border: 2px solid black;
            border-collapse: collapse;
        }

        .clearfix {
            overflow: auto !important;
        }

        .ttd-kepalaan {
            position: absolute;
            width: 300px;
            text-align: center;
            right: 10px;
            bottom: 20px;
        }

        .text-upper {
            text-transform: uppercase;
        }

        .text-underline {
            text-decoration: underline;
        }

        .padding-y {
            padding-top: 7px;
            padding-bottom: 7px;
        }
    </style>
</head>

<body>
    <div class="ttd-kepalaan">
        <small class="d-block">Gresik, 08 Juli 2023</small>
        <small class="d-block">Yang Bepergian</small>
        <br>
        <br>
        <p class="text-bold text-underline"><?= $data["nama_pelaksana"]?></p>
        <small class="d-block">NIP. <?= $data["nik_nip"]?></small>
    </div>
    <div class="w-100">
        <table class="w-100">
            <tr>
                <td>
                    <!-- <img src="https://pbs.twimg.com/profile_images/1212213745033695234/uR2hvco2_400x400.jpg" alt="https://pbs.twimg.com/profile_images/1212213745033695234/uR2hvco2_400x400.jpg" width="100px"> -->
                </td>
                <td class="text-center">
                    <h4 class="text-upper" style="margin: 10px; padding: 0;">Pemerintahan Kabupaten Gresik</h4>
                    <h3 class="text-upper" style="margin: 0; padding: 0;">Sekretariat dewan perwakilan rakyat daerah</h3>
                    <p style="padding: 0; margin: 9;">Jl. KH.Wachid Hasyim No : 5 Telp. (031) 3981794 Fax (031) 3984989</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="w-100" style="margin-top: 10px;">
        <h3 class="text-upper text-underline text-center">RINCIAN BIAYA PERJALANAN DINAS</h3>
        <table class="w-50">
            <tr>
                <td>
                    <small class="d-block">Lampiran SPPD Nomor</small>
                </td>
                <td>
                    <small class="d-block">:</small>
                </td>
                <td>
                    <small class="d-block">090/1175/437.44/2023</small>
                </td>
            </tr>
            <tr>
                <td>
                    <small class="d-block">Tanggal</small>
                </td>
                <td>
                    <small class="d-block">:</small>
                </td>
                <td>
                    <small class="d-block"><?= $data["tgl_berangkat"]?></small>
                </td>
            </tr>
        </table>
    </div>
    <table class="w-100 border-collapse" style="margin-top: 10px;">
        <thead>
            <tr>
                <th class="text-upper border-collapse">no</th>
                <th class="text-upper border-collapse">perincian biaya</th>
                <th class="text-upper border-collapse">jumlah</th>
                <th class="text-upper border-collapse">keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="padding-y">1. </td>
                <td class="padding-y">
                    <small class="d-block">Transport : </small>
                </td>
                <td class="padding-y">
                    <small class="d-block">Rp. <?= number_format($data["bbm"], 0, ".", ".")?></small>
                </td>
                <td class="padding-y"><small class="d-block">BBM</small></td>
            </tr>
            <tr>
                <td class="padding-y">2. </td>
                <td class="padding-y">
                    <small class="d-block">Uang harian : </small>
                </td>
                <td class="padding-y">
                    <small class="d-block">Rp. <?= number_format(substr($ket[0], 0, 1) * $data["uang_harian"], 0, ".", ".")?></small>
                </td>
                <td class="padding-y"><small class="d-block">1 orang selama 3 hari</small></td>
            </tr>
            <tr>
                <td class="padding-y">3. </td>
                <td class="padding-y">
                    <small class="d-block">Uang representasi : </small>
                </td>
                <td class="padding-y">
                    <small class="d-block">Rp. <?= number_format(substr($ket[0], 0, 1) * $data["uang_representasi"], 0, ".", ".")?></small>
                </td>
                <td class="padding-y"><small class="d-block">Representasi 1 orang selama 3 hari</small></td>
            </tr>
            <tr>
                <td class="padding-y">4. </td>
                <td class="padding-y">
                    <small class="d-block">Akomodasi : </small>
                </td>
                <td class="padding-y">
                    <small class="d-block">Rp. <?= number_format($data["akomodasi"], 0, ".", ".")?></small>
                </td>
                <td class="padding-y"><small class="d-block">2 orang selama 2 malam</small></td>
            </tr>
            <tr>
                <td class="padding-y">5. </td>
                <td class="padding-y">
                    <small class="d-block">Tol : </small>
                </td>
                <td class="padding-y">
                    <small class="d-block">Rp. <?= number_format($data["tol"], 0, ".", ".")?></small>
                </td>
                <td class="padding-y"></td>
            </tr>
            <tr>
                <td class="padding-y"></td>
                <td class="padding-y text-right">
                    <small class="d-block">Jumlah ......</small>
                </td>
                <td class="padding-y">
                    <small class="d-block">Rp. <?= number_format($data["jumlah_total"], 0, ".", ".")?></small>
                </td>
                <td class="padding-y"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td class="border-collapse"></td>
                <td colspan="3" class="border-collapse" style="padding: 5px;">
                    <p class="text-bold" style="padding: 0; margin:0;">Terbilang : <?= terbilang($data["jumlah_total"])?></p>
                </td>
            </tr>
        </tfoot>
    </table>
    <table class="w-100" style="margin-top: 10px;">
        <tbody>
            <tr>
                <td><small class="d-block">Telah dibayar sejumlah</small></td>
                <td><small class="d-block">Telah menerima sejumlah</small></td>
            </tr>
            <tr>
                <td><small class="d-block">Rp. <?= number_format($data["jumlah_total"], 0, ".", ".")?></small></td>
                <td><small class="d-block">Rp. <?= number_format($data["jumlah_total"], 0, ".", ".")?></small></td>
            </tr>
            <tr>
                <td style="padding-top: 20px;"><small class="d-block text-center">Bendahara, </small></td>
                <td style="padding-top: 20px;"><small class="d-block text-center">Gresik, 08 Juli 2023</small><small class="d-block text-center">Yang Menerima,</small></td>
            </tr>
            <tr>
                <td style="padding-top: 70px;"><small class="d-block text-center text-bold text-underline"><?= $settings["nama_bendahara"]?></small></td>
                <td style="padding-top: 70px;"><small class="d-block text-center text-bold text-underline">Ir. MOKHAMMAD NAJIKH, M.M.</small></td>
            </tr>
            <tr>
                <td><small class="d-block text-center">NIP. <?= $settings["nip_bendahara"]?></small></td>
                <td><small class="d-block text-center">NIP. 19680412 199203 1 011</small></td>
            </tr>
        </tbody>
    </table>
    <hr style="border-top: 1px solid black; border-bottom: 0px solid black;">
    <h3 class="text-center">PERHITUNGAN SPPD RAMPUNG</h3>
    <table class="w-50">
        <tr>
            <td>
                <small class="d-block">Ditetapkan sejumlah</small>
            </td>
            <td><small class="d-block">: Rp</small></td>
            <td><small class="d-block"><?= number_format($data["jumlah_total"], 0, ".", ".")?></small></td>
        </tr>
        <tr>
            <td>
                <small class="d-block">Yang telah dibayar semula</small>
            </td>
            <td><small class="d-block">: Rp</small></td>
            <td><small class="d-block"><?= number_format($data["jumlah_total"], 0, ".", ".")?></small></td>
        </tr>
        <tr>
            <td>
                <small class="d-block">Sisa kurang lebih</small>
            </td>
            <td><small class="d-block">: Rp</small></td>
            <td><small class="d-block">-</small></td>
        </tr>
    </table>
</body>

</html>