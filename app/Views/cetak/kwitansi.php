    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title?></title>
        <style>
            html{
                margin: 8px;
                padding: 0;
                font-size: small;
            }
            
            table{
                width: 100%;
            }

            h3{
                text-align: center; 
            }

            thead, tfoot{
                background-color: #bb99ff;
            }
            .t-utama, .th-utama, .td-utama {
            border: 1px solid black;
            border-collapse: collapse;
            }
        </style>
    </head>
    <body>

        <h3>TANDA TERIMA BIAYA PERJALANAN DINAS PNS & NON PNS <br> <?= strtoupper($data[0]["judul_rincian"])?></h3>
        <br>
        <table class="t-utama">
            <thead>
                <tr>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;" rowspan="2">No</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;" rowspan="2">Nama</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;" rowspan="2">Pangkat</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;" colspan="3">Uang Harian</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;" rowspan="2">Uang Representasi</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;" rowspan="2">Uang Akomodasi</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;" colspan="2">Transportasi</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;" rowspan="2">Jumlah Diterimakan</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;" rowspan="2">Tanda Tangan</th>
                </tr>
                <tr>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;">Satuan</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;">Vol</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;">Total</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;">BBM</th>
                    <th class="th-utama" style="padding-top: 8px; padding-bottom: 8px;">Tol</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $total_uang_harian = 0;
                $total_uang_representasi = 0;
                $total_uang_akomodasi = 0;
                $total_uang_bbm = 0;
                $total_uang_tol = 0;
                $total_uang_semua = 0;

                ?>
                <?php $no=1; foreach($data as $d):?>
                    <tr>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= $no?></td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= $d["nama_pelaksana"]?></td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= $d["jabatan"]?></td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;">Rp. <?= number_format($d["uang_harian"], 0, ".", ".")?></td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;">
                            <?php 
                              $ket = explode(", ", $d["keterangan"]);
                              echo $ket[0];
                            ?>
                        </td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= number_format(intval(substr($ket[0], 0, 1)) * $d["uang_harian"], 0, ".", ".")?></td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= ($d["uang_representasi"]) ? number_format($d["uang_representasi"], 0, ".", "."): 0?></td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= ($d["akomodasi"]) ? number_format($d["akomodasi"], 0, ".", ".") : 0; ?></td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= ($d["bbm"]) ? number_format($d["bbm"], 0, ".", ".") : 0;?></td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= ($d["tol"]) ? number_format($d["tol"], 0, ".", ".") : 0;?></td>
                        <td class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= number_format($d["jumlah_total"], 0, ".", ".")?></td>
                        <?php if($no % 2 == 0):?>
                            <td class="td-utama" style="text-align:right; padding-top: 8px; padding-bottom: 8px;">
                                <?= $no?>........
                            </td>
                        <?php else:?>
                            <td class="td-utama" style="text-align:left; padding-top: 8px; padding-bottom: 8px;">
                                <?= $no?>........
                            </td>
                        <?php endif?>
                    </tr>
                <?php
                    $total_uang_harian += intval(substr($ket[0], 0, 1)) * $d["uang_harian"];
                    $total_uang_representasi += $d["uang_representasi"];
                    $total_uang_akomodasi += $d["akomodasi"];
                    $total_uang_bbm += $d["bbm"];
                    $total_uang_tol += $d["tol"];
                    $total_uang_semua += $d["jumlah_total"];
                    $no++; 
                 endforeach?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="td-utama" colspan="5" style="text-align: center; padding-top: 8px; padding-bottom: 8px;">Total</th>
                    <th class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= number_format($total_uang_harian, 0, ".", ".")?></th>
                    <th class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= number_format($total_uang_representasi, 0, ".", ".")?></th>
                    <th class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= number_format($total_uang_akomodasi, 0, ".", ".")?></th>
                    <th class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= number_format($total_uang_bbm, 0, ".", ".")?></th>
                    <th class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= number_format($total_uang_tol, 0, ".", ".")?></th>
                    <th class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"><?= number_format($total_uang_semua, 0, ".", ".")?></th>
                    <th class="td-utama" style="padding-top: 8px; padding-bottom: 8px;"></th>
                </tr>
            </tfoot>
        </table>
        <br>
        <table style="width: 100%">
            <tbody>
                <tr>
                   <td style="text-align:center;">Pejabat Pelaksana Teknis Kegiatan</td>
                   <td style="text-align:center;">Mengetahui/Menyetujui Pengguna Anggaran</td> 
                   <td style="text-align:center;">Gresik, Februari 2023 Bendahara pengeluaran</td> 
                </tr>
                <tr>
                    <td style="padding: 35px;"></td>
                    <td style="padding: 35px;"></td>
                    <td style="padding: 35px;"></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-decoration: underline; text-align: center;"><?= $settings["nama_pembina"]?></td>
                    <td style="font-weight: bold; text-decoration: underline; text-align: center;"><?= $settings["nama_pembina_utama_muda"]?></td>
                    <td style="font-weight: bold; text-decoration: underline; text-align: center;"><?= $settings["nama_bendahara"]?></td>
                </tr>
                <tr>
                    <td style="text-align:center;">Pembina</td>
                    <td style="text-align:center;">Pembina utama muda</td>
                    <td style="text-align:center;">Penata muda</td>
                </tr>
                <tr>
                    <td style="text-align:center;">NIP. <?= $settings["nip_pembina"]?></td>
                    <td style="text-align:center;">NIP. <?= $settings["nip_pembina_utama_muda"]?></td>
                    <td style="text-align:center;">NIP. <?= $settings["nip_bendahara"]?></td>
                </tr>
            </tbody>
        </table>
    </body>
    </html>