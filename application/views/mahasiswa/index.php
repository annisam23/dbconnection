<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>

<body>
    <div class="col-md-12">
        <h3>
            Data Mahasiswa
        </h3>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>IPK</th>
                    <th>Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($list_mahasiswa as $mhs) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $mhs->nim ?></td>
                        <td><?= $mhs->nama ?></td>
                        <td><?= $mhs->gender ?></td>
                        <td><?= $mhs->tmp_lahir ?></td>
                        <td><?= $mhs->tgl_lahir ?></td>
                        <td><?= $mhs->ipk ?></td>
                        <td><?= $mhs->prodi_kode ?></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>