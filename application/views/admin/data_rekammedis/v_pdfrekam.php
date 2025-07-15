<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medik Perawatan Gigi</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5;">
    <div style="max-width: 800px; margin: 0 auto; background-color: white; padding: 30px; border: 2px solid #333; box-shadow: 0 0 10px rgba(0,0,0,0.1);">

        <!-- Header -->
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px;">
            <div style="display: flex; align-items: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(45deg, #e91e63, #9c27b0); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                    <span style="color: white; font-size: 24px; font-weight: bold;">🦷</span>
                </div>
                <div>
                    <div style="color: #e91e63; font-weight: bold; font-size: 14px;">GELIGI</div>
                    <div style="color: #666; font-size: 12px;">DENTAL CARE</div>
                </div>
            </div>
            <div style="border: 2px solid #333; padding: 5px 10px; font-weight: bold; font-size: 12px;">
                <?= $detail->id_RM ?? 'NO.RM' ?>
            </div>
        </div>

        <!-- Info Klinik -->
        <div style="text-align: center; margin-bottom: 20px; font-size: 11px; line-height: 1.4;">
            PRAKTIK DRKG TITIS KURNIA ANGGRAENI & DRG. REGINA FAUZIANA<br>
            JL. SIWALANKERTO 5, SURIOBA PLOSO, PRIANTAHATI
        </div>

        <!-- Judul -->
        <h2 style="text-align: center; font-size: 18px; font-weight: bold; margin: 30px 0; letter-spacing: 1px;">
            REKAM MEDIK PERAWATAN GIGI
        </h2>

        <!-- Identitas Pasien -->
        <h3 style="font-size: 14px; font-weight: bold; margin: 25px 0 15px 0; letter-spacing: 0.5px;">DATA IDENTITAS PASIEN</h3>
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px; border: 2px solid #333;">
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; background-color: #f8f8f8; font-weight: bold; width: 25%;">NAMA</td>
                <td style="border: 1px solid #333; padding: 8px 12px;"><?= $detail->nama ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; background-color: #f8f8f8; font-weight: bold;">TEMPAT/TGL LAHIR</td>
                <td style="border: 1px solid #333; padding: 8px 12px;"><?= $detail->tmpt_lahir ?>, <?= date('d-m-Y', strtotime($detail->tgl_lahir)) ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; background-color: #f8f8f8; font-weight: bold;">JENIS KELAMIN</td>
                <td style="border: 1px solid #333; padding: 8px 12px;"><?= $detail->jk ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; background-color: #f8f8f8; font-weight: bold;">PEKERJAAN</td>
                <td style="border: 1px solid #333; padding: 8px 12px;"><?= $detail->pekerjaan ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; background-color: #f8f8f8; font-weight: bold;">ALAMAT</td>
                <td style="border: 1px solid #333; padding: 8px 12px;"><?= $detail->alamat ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; background-color: #f8f8f8; font-weight: bold;">STATUS PERNIKAHAN</td>
                <td style="border: 1px solid #333; padding: 8px 12px;"><?= $detail->status ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; background-color: #f8f8f8; font-weight: bold;">NO. HP</td>
                <td style="border: 1px solid #333; padding: 8px 12px;"><?= $detail->no_hp ?></td>
            </tr>
        </table>

        <!-- Data Medik -->
        <h3 style="font-size: 14px; font-weight: bold; margin: 25px 0 15px 0;">DATA MEDIK PASIEN</h3>
        <table style="width: 100%; border-collapse: collapse; border: 2px solid #333;">
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">1.</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 70%; background-color: #f8f8f8; font-weight: bold;">GOLONGAN DARAH</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">:</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 20%;"><?= $detail->goldar ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">2.</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 70%; background-color: #f8f8f8; font-weight: bold;">TEKANAN DARAH</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">:</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 20%;"><?= $detail->blood_press ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">3.</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 70%; background-color: #f8f8f8; font-weight: bold;">PENYAKIT JANTUNG</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">:</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 20%;"><?= $detail->jantung ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">4.</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 70%; background-color: #f8f8f8; font-weight: bold;">DIABETES</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">:</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 20%;"><?= $detail->diabetes ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">5.</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 70%; background-color: #f8f8f8; font-weight: bold;">HAEMOPHILIA/KELAINAN DARAH</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">:</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 20%;"><?= $detail->haemophilia ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">6.</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 70%; background-color: #f8f8f8; font-weight: bold;">HEPATITIS</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">:</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 20%;"><?= $detail->hepatitis ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">7.</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 70%; background-color: #f8f8f8; font-weight: bold;">PENYAKIT LAINNYA</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">:</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 20%;"><?= $detail->sakit_lain ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">8.</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 70%; background-color: #f8f8f8; font-weight: bold;">ALERGI OBAT</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">:</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 20%;"><?= $detail->alergi_obat ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">9.</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 70%; background-color: #f8f8f8; font-weight: bold;">ALERGI MAKANAN</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 5%; text-align: center; background-color: #f8f8f8; font-weight: bold;">:</td>
                <td style="border: 1px solid #333; padding: 8px 12px; width: 20%;"><?= $detail->alergi_makanan ?></td>
            </tr>
        </table>

        <!-- Footer -->
        <div style="height: 50px; margin-top: 30px;"></div>
    </div>
</body>

</html>